<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCompleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     * 
     */

    public $order;

    public function __construct($order,$seller_email)
    {
        $this->order=$order;
        $this->seller_email=$seller_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to([$this->order->customer->email,$this->seller_email])->view('emails.orders.completed');
    }
}
