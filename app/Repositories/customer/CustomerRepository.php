<?php

namespace App\Repositories\customer;

use App\Repositories\customer\CustomerInterface;
use App\Models\User;
use Throwable;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\LogActivity;
use App\Rules\nationalID;
use App\Rules\contactNo;

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
            $user->user_name = $first_name.'_'.$last_name;
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
        $user_adds = Post::where('user_id', $user->id)->with('Vehicle')->get();
        return view('user_profile', ['user_profile_data' => $user, 'user_adds' => $user_adds]);
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
                $user->user_name = $user->name.'_'.$user->last_name;
                $user->address = request('address');
                $user->contact_no = request('contactNo');
                $user->nic = request('nic');
                $user->save();
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
}
