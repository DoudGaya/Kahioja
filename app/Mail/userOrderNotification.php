<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class userOrderNotification extends Mailable
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
                            'cust_name' => $this->send_data['cust_name'],
                            'cust_email' => $this->send_data['cust_email'],
                            'cust_phone' => $this->send_data['cust_phone'],
                            'cust_address' => $this->send_data['cust_address'],
                            'cart' => $this->send_data['cart'],
                            'amount' => $this->send_data['amount']
                        ])
                        ->subject('Thanks for Your Order')->view('mails.userordernotification', ['request'=>$request]);
        }
    }
}
