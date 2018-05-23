<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function sendContactForm(Request $request)
    {
     
        $request->name;
        $request->email;
        $request->message;
// dd('dfsd');
        Mail::send(new ContactForm($request));

        return back()->with('message','Your Email Has been Sent!');
    }
}
