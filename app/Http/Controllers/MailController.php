<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignupEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public static function sendSignupEmail($name, $email){
        $data = [
            'name' => $name,
            'email' => $email,
            // 'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new SignupEmail($data));
    }
}
