<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;
use App\Mail\ContactMail;
use Mail;


class ContactController extends Controller
{
    public function store(Request $request){

        // dd($request);
        $data = $request->validate([
            'contact_name' => ['required'],
            'contact_email' => ['required','email'],
            'contact_message' =>['required']
        ]);

        // dd(Contact::get());
        // Contact::create([
        //     'contact_name' => $request->contact_name,
        //     'contact_email' => $request->contact_email,
        //     'contact_message' => $request->contact_message
        // ]);

        $contact = new Contact;

        $contact->contact_name = request()->contact_name;
        $contact->contact_email = request()->contact_email;
        $contact->contact_message = request()->contact_message;
        

        $contact->save();

        
        Mail::to('perusonaryu1127@gmail.com')->send(new ContactMail($data));
    }

}
