<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRegisterMail;
use App\Mail\SendMailAdmin;


class MailController extends Controller
{
    public static function SendMailRegister($email){

        $data=[
            'email'=>$email,
        ];

        Mail::to($email)->send(new \App\Mail\SendRegisterMail($data));
    }

    public static function SendMailAdmin(){
        Mail::to(menv('MAIL_FROM_ADDRESS'))->send(new \App\Mail\SendMailAdmin());
    }
}
