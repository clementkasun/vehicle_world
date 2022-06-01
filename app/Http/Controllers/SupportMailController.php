<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportMailController extends Controller
{

    public function sendMail(Request $request)
    {
        $email = 'kasunclement12345@gmail.com';

        \Mail::to($email)->send(new \App\Mail\MyTestMail($request));

        return array('status' => 1);
    }
}
