<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;

class OrderCompleted extends Mailable implements ShouldQueue
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
    public $products=array();

    public function __construct(Order $order, $settings, $products)
    {
        $this->order=$order;
        $this->settings=$settings;
        $this->products=$products;
        // dd($products);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->settings->email)->view('emails.orders.completed');
    }
}
