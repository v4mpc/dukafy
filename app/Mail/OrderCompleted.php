<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCompleted extends Mailable // implements ShouldQueue
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
    public $settings;

    public function __construct($order, $settings)
    {
        $this->order=$order;
        $this->settings=$settings;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address'=>$this->settings->email,'name'=>$this->settings->store_name])->view('emails.orders.completed');
    }
}
