<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable implements ShouldQueue
{
    use Queueable,SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail;
    public $message;

    public function __construct($request)
    {
        $this->mail=$request->email;
        $this->message=$request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->with([
            'message'=>$this->message
        ]);
    }
}
