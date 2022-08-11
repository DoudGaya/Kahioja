<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class UserOrderCompleteMsg extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send_data)
    {
        $this->send_data = $send_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        {
            return $this->with([
                            'order_no' => $this->send_data['order_no'],
                            'cart' => $this->send_data['cart'],
                            'amount' => $this->send_data['amount']
                        ])
                        ->subject('Your Order has been completed successfully')->view('mails.userordercompletemsg', ['request'=>$request]);
        }
    }
}
