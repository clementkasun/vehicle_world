<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('registration.customer_reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            \DB::transaction(function () use($request){
                request()->validate([
                    'firstName' => 'required|max:50|string',
                    'lastName' => 'sometimes|nullable|max:50|string',
                    'address' => 'sometimes|max:100',
                    'contactNo' => 'required|max: 10',
                    'email' => 'required|email',
                    'nic' => 'required',
                    'roll' => 'integer|required',
                    'password' => 'required|min:6',
                    'city' => 'required|max:255|string',
                    'file' => 'required'
                        // 'institute' => 'required|integer',
                ]);

                $user = new User();
                $first_name = request('firstName');
                $last_name = request('lastName');
                $user->email = request('email');
                $user->name = $first_name;
                $user->last_name = $last_name;
                $user->address = request('address');
                $user->contact_no = request('contactNo');
                $user->nic = request('nic');
                $user->roll_id = request('roll');
                $user->password = Hash::make(request('password'));
                
                $random_name = uniqid('user_image');
                if ($request->file != 'undefined') {
                    $main_ext = $request->file->extension();
                    $path_main = $request->file('file')->storeAs(
                        '/public/user_images', $random_name . '.' . $main_ext
                    );
                    $image_path = str_replace("public/", "/", $path_main);
                    $user->profile_photo_path = $image_path;
                }
               
                
                $user->save();

            });
            return array('status' => 1, 'Customer Data Saving is successfull!');
        } catch (Throwable $e) {
            return array('status' => 0, 'Customer Data Saving is Unsuccessfull!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $customer_data = Customer::with('User')->get();
        return $customer_data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $customer_id_data = Customer::Where('id', $id)->with('User')->get();
        return $customer_id_data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        try {
            \DB::transaction(function () use($id){
                request()->validate([
                    'firstName' => 'required|max:50|string',
                    'lastName' => 'sometimes|nullable|max:50|string',
                    'address' => 'sometimes|max:100',
                    'contactNo' => ['nullable', new contactNo],
                    'email' => 'required|email',
                    'nic' => ['sometimes', 'nullable', 'unique:users', new nationalID],
                    'roll' => 'integer|required',
                    'password' => 'required|confirmed|min:6',
                    'city' => 'required|max:255|string'
                        // 'institute' => 'required|integer',
                ]);
                $user_id = Auth()->user()->id;

                $user = User::where('user_id', $user_id)->first();
                $user->email = request('email');
                $user->name = request('firstName');
                $user->last_name = request('lastName');
                $user->address = request('address');
                $user->contact_no = request('contactNo');
                $user->nic = request('nic');
                $user->roll_id = request('roll');
                $user->password = Hash::make(request('password'));
                $user->save();

                UserController::PrevilagesAdd($user);
            });

            return array('status' => 1, 'Successfully Updated the Customer data!');
        } catch (Throwable $e) {
            return array('status' => 0, 'Customer Data Upadation is Unsuccessfull!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        try {
            \DB::transaction(function () {
                $customer = Customer::find($id);
                $user_id = $customer->user_id;

                Customer::find($id)->delete();
                User::find($user_id)->delete();
            });
            return array('status' => 1, 'Customer Data Deletion is Successfull!');
        } catch (Throwable $e) {
            return array('status' => 0, 'Customer Data Deletion is Unsuccessfull!');
        }
    }

    public function email_nic_exist(Request $request) {
        $email = $request->email;
        $nic = $request->nic;
        $cust_nic = User::where('nic', '=', $nic)->first();
        $user_nic = User::where('nic', '=', $nic)->first();
        $user_email = User::where('email', '=', $email)->first();
        $cust_email = Customer::where('email', '=', $email)->first();
        
        if(!is_null($user_nic) || !is_null($cust_nic)){
            return 1;
        }
        if(!is_null($user_email) || !is_null($cust_email)){
            return 2;
        }
    }
}
