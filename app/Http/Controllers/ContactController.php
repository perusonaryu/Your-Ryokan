<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;
class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'contact_name' => ['required'],
            'contact_email' => ['required','email'],
            'contact_message' =>['required']
        ]);


        Contact::create([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contct_message' =>$request->contact_message
        ]);

        // $contact = new Contact;

        // $contact->contact_name = request()->contact_name;
        // $contact->contact_email = request()->contact_email;
        // $contact->contact_message = request()->contact_message;


        // $contact->save();
    }
}
