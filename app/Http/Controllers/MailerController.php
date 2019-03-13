<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Setting;
use App\Mail\DukafyContactForm;
use Session;

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


       
        $setting=Setting::where('account_id',getAccountId($request))->first();
        Mail::to($setting->email)->subject($setting->store_name.' contact from')->replyTo($request->email)->send(new DukafyContactForm($request));
        Session::flash('email_sent', 'Email Sent');
        return redirect()->route('start');

        // Mail::send(new ContactForm($request));

        // return back()->with('message', 'Your Email Has been Sent!');
    }
}
