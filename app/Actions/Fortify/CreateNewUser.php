<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'avatar' => ['required'],
        ])->validate();

        // if (isset($input['avatar'])) {
        //     $main_ext = $input['avatar']->extension();
        //     $random_name = uniqid('user_image');
        //     $path_main = $input['avatar']->storeAs(
        //         '/public/user_images',
        //         $random_name . '.' . $main_ext
        //     );
        //     $image_path = str_replace("public/", "/", $path_main);
        // }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            // 'profile_photo_path' => !empty(isset($input['avatar'])) ? $image_path : '/dist/avatar5.png'
        ]);
    }

}
