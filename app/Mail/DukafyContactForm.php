<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DukafyContactForm extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message;
    public $email;
    public $name;
    public $setting;
    public function __construct($request,$setting)
    {
        $this->message = $request->message;
        $this->email = $request->email;
        $this->name = $request->name;
        $this->setting=$setting;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@dukafy.co.tz')->subject($this->setting->store_name.' contact from')->replyTo($request->email)->markdown('emails.dukafy.contact')->with('message', $this->message)->with('email', $this->email)->with('name', $this->name);
    }
}
