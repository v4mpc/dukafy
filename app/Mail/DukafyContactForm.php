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
    public function __construct($request)
    {
        $this->message = $request->message;
        $this->email = $request->email;
        $this->name = $request->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@dukafy.co.tz')->markdown('emails.dukafy.contact')->with('message', $this->message)->with('email', $this->email)->with('name', $this->name);
    }
}
