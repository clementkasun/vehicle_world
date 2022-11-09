<?php

namespace App\Repositories\customer;

use App\Repositories\customer\CustomerInterface;
use App\Models\User;
use Throwable;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\LogActivity;
use App\Models\UserFavourite;
use App\Models\UserMessage;
use App\Notifications\CustomerRegisteredNotification;
use App\Notifications\CustomerPasswordChangedNotification;
use App\Notifications\CustomerProfileBasicDataChangedNotification;
use App\Rules\contactNo;
use Illuminate\Support\Facades\Notification;

class CustomerRepository implements CustomerInterface
{
    public function createCustomer($request)
    {
        try {
            request()->validate([
                'firstName' => 'required|max:100|string',
                'user_name' => 'sometimes|nullable|max:50|string',
                'lastName' => 'sometimes|nullable|max:50|string',
                'address' => 'sometimes|max:100',
                'contactNo' => 'required|max: 10',
                'email' => 'sometimes|nullable|email',
                'nic' => 'required',
                'roll' => 'integer|required',
                'password' => 'required|min:6',
                'city' => 'required|max:255|string',
                'file' => 'required'
            ]);

            $exist_user_passwords = User::select('password')->get()->toArray();
            foreach ($exist_user_passwords as $user_password) {
                $pass = $user_password['password'];
                if (Hash::check(request('password'), $pass)) {
                    return array('status' => 2, 'message' => 'Password already exist');
                }
            }
            $user = new User();
            $first_name = request('firstName');
            $last_name = request('lastName');
            (request('email') != null) ? $user->email = request('email') : '';
            $user->name = $first_name;
            $user->last_name = $last_name;
            $user->user_name = $request->user_name;
            $user->address = request('address');
            $user->contact_no = request('contactNo');
            $user->nic = request('nic');
            $user->roll_id = request('roll');
            $user->password = Hash::make(request('password'));

            $random_name = uniqid('user_image');
            if ($request->file != 'undefined') {
                $main_ext = $request->file->extension();
                $path_main = $request->file('file')->storeAs(
                    '/public/user_images',
                    $random_name . '.' . $main_ext
                );
                $image_path = str_replace("public/", "/", $path_main);
                $user->profile_photo_path = $image_path;
            }
            $user->save();
            Notification::send($user, new CustomerRegisteredNotification($user));
            return array('status' => 1, 'Customer Data Saving is successfull!');
        } catch (Throwable $e) {
            return array('status' => 0, 'Customer Data Saving is Unsuccessfull!');
        }
    }

    public function showCustomers()
    {
        return User::all();
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function myProfile()
    {
        $user = Auth::user();
        $user_adds = Post::where('user_id', $user->id)
            ->with(['Vehicle', 'SparePart'])
            ->withAvg('UserReview as user_ratings', 'user_star')
            ->withCount('UserReview as review_count')
            ->get();
        $user_favoured_posts = UserFavourite::where('user_id', $user->id)->with('Post')->get();
        return view('user_profile', ['user_profile_data' => $user, 'user_adds' => $user_adds, 'user_favoured_posts' => $user_favoured_posts]);
    }

    public function changePassword($request, $id)
    {
        $exist_user_passwords = User::select('password')->get()->toArray();
        foreach ($exist_user_passwords as $user_password) {
            $pass = $user_password['password'];
            if (Hash::check(request('password'), $pass)) {
                return array('status' => 2, 'message' => 'Password already exist');
            }
        }
        $aUser = User::find($id);
        request()->validate([
            'password' => 'required|min:6',
        ]);
        $aUser->password = Hash::make(request('password'));
        $msg = $aUser->save();
        Notification::send($aUser, new CustomerPasswordChangedNotification($aUser));
        if ($msg) {
            return array('status' => 1, 'message' => 'Successfully changed the password');
        } else {
            return array('status' => 0, 'message' => 'Password change unsuccessful');
        }
    }

    public function updateBasicData($request, $id)
    {
        try {
            \DB::transaction(function () use ($id) {
                request()->validate([
                    'firstName' => 'required|max:50|string',
                    'lastName' => 'sometimes|nullable|max:50|string',
                    'user_name' => 'sometimes|nullable|max:100|string',
                    'address' => 'sometimes|max:100',
                    'contactNo' => ['nullable', new contactNo],
                    'email' => 'sometimes|nullable|email',
                    'nic' => ['sometimes', 'nullable', 'unique:users'],
                ]);
                $user = User::find($id);
                (request('email') != null) ?  $user->email = request('email') : '';
                $user->name = request('firstName');
                $user->last_name = request('lastName');
                $user->user_name = $user->name . '_' . $user->last_name;
                $user->address = request('address');
                $user->contact_no = request('contactNo');
                $user->nic = request('nic');
                $user->save();
                Notification::send($user, new CustomerProfileBasicDataChangedNotification($user));
            });
            return array('status' => 1, 'Successfully Updated the Customer data!');
        } catch (Throwable $e) {
            return array('status' => 0, 'Customer Data Upadation is Unsuccessfull!');
        }
    }

    public function removeCustomer()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $msg = $user->delete();
        if ($msg) {
            return array('status' => 1, 'Successfully removed the Customer data!');
        } else {
            return array('status' => 0, 'Customer Data remove is Unsuccessfull!');
        }
    }

    public function isEmailNicExist($request)
    {
        $email = $request->email;
        $nic = $request->nic;
        $user_nic = User::where('nic', '=', $nic)->exists();
        $user_email = User::where('email', '=', $email)->exists();

        if ($email != null) {
            if ($user_nic) {
                return 1;
            } else if ($user_email) {
                return 2;
            } else {
                return 0;
            }
        } else {
            if ($user_nic) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    public function userMessegesView($user_id)
    {
        $get_user_msgs = UserMessage::where('user_to_id', $user_id)
            ->groupBy('user_from_id')
            ->orderBy('created_at', 'desc')
            ->with('User')
            ->get();
        return view('./profile/user_messages', ['user_msgs' => $get_user_msgs]);
    }

    public function directMessageView($logged_user, $user_id)
    {
        $get_user_from_msgs = UserMessage::where('user_from_id', $logged_user)
            ->where('user_to_id', $user_id)
            ->orderBy('created_at', 'asc')
            ->with('User')
            ->get();

        $get_user_to_msgs = UserMessage::where('user_from_id', $user_id)
            ->where('user_to_id', $logged_user)
            ->orderBy('created_at', 'asc')
            ->with('User')
            ->get();

        $msg_count = $get_user_from_msgs->count() + $get_user_to_msgs->count();

        return view('./profile/direct_chat', ['user_from_msgs' => $get_user_from_msgs, 'user_to_msgs' => $get_user_to_msgs, 'logged_user' => $logged_user, 'sent_user' => $user_id, 'msg_count' => $msg_count]);
    }

    public function sendDirectMessage($request, $from_user, $to_user)
    {
        $request = $request->all();

        $send_message = UserMessage::create([
            'message' => $request['message'],
            'user_from_id' => $from_user,
            'user_to_id' => $to_user,
            'created_at' => now()
        ]);

        $get_user_from_msgs = UserMessage::where('user_from_id', $from_user)
            ->where('user_to_id', $to_user)
            ->orderBy('created_at', 'asc')
            ->with('User')
            ->get();

        $get_user_to_msgs = UserMessage::where('user_from_id', $to_user)
            ->where('user_to_id', $from_user)
            ->orderBy('created_at', 'asc')
            ->with('User')
            ->get();

        $msg_count = $get_user_from_msgs->count() + $get_user_to_msgs->count();

        $url = '/profile/direct_chat';
        // Notification::send($from_user, new CustomerProfileBasicDataChangedNotification($to_user));
        // Notification::send($to_user, new CustomerProfileBasicDataChangedNotification($from_user));
        if ($send_message == true) {
            return view($url, ['user_from_msgs' => $get_user_from_msgs, 'user_to_msgs' => $get_user_to_msgs, 'logged_user' => $from_user, 'sent_user' => $to_user, 'msg_count' => $msg_count, 'status' => 1, 'msg' => 'Message sent successfully']);
        } else {
            return view($url, ['user_from_msgs' => $get_user_from_msgs, 'user_to_msgs' => $get_user_to_msgs, 'logged_user' => $from_user, 'sent_user' => $to_user, 'msg_count' => $msg_count, 'status' => 0, 'msg' => 'Message send was unsuccessful']);
        }
    }
}
