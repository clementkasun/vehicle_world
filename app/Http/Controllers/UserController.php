<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    public function activeDeletedUser($id)
    {
        $user = Auth::user();
        $pageAuth = $user->authentication(config('auth.privileges.userCreate'));

        $msg = User::withTrashed()->find($id)->restore();

        if ($msg) {
            return array('id' => 1, 'mgs' => 'true');
        } else {
            return array('id' => 0, 'mgs' => 'false');
        }
    }

    public function authToken(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->whereHas('roll.level', function ($query) {
            $query->where('levels.value', '3');
        })->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return array("token" => $user->createToken($request->device_name)->plainTextToken, 'user' => $user);
    }
}
