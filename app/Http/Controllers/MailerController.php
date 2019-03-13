<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'captcha'=>'required|captcha'
        ]);

        dd('good');

        $request->name;
        $request->email;
        $request->message;
        Mail::send(new ContactForm($request));

        return back()->with('message', 'Your Email Has been Sent!');
    }
}
