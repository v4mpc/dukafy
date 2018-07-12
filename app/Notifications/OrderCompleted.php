<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Mail\OrderCompleted as Mailable;

class OrderCompleted extends Notification //implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $order;

    public function __construct($order,$seller_email)
    {   
        $this->seller_email=$seller_email;
        $this->order=$order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // // return (new MailMessage)
        // //             ->view('emails.orders.completed',['order'=>$this->order])->to([$this->order->customer->email,$this->seller_email]);

        //             return (new Mailable($this->order))->to([$this->order->customer->email,$this->seller_email]);
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        
            'order_id'=>$this->order->id,
        ];
    }
}
