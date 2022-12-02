<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class SenMailController extends Controller
{
    public function sendMail()
    {
        Mail::send('email',[],function($message) {
            $message->to('tahmedhera@gmail.com')->subject('Sendgrid Testing');
        });
        dd('Mail Send Successfully');
    }
}
