<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail;

use Mail;

class MailSendController extends Controller
{
    public function send(){

        $to = [
            [
                'email' => 'perusonaryu1127@gmail.com', 
                'name' => 'Test',
            ]
        ];
    
        Mail::to($to)->send(new SendTestMail());
    
        }
}
