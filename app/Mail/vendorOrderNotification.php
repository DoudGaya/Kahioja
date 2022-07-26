<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class vendorOrderNotification extends Mailable
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
        return $this->with([
                        'order_no' => $this->send_data['orderId'],
                        'cust_name' => $this->send_data['name'],
                        'cust_email' => $this->send_data['email'],
                        'cust_phone' => $this->send_data['phone'],
                        'cust_address' => $this->send_data['address'],
                        'cart' => $this->send_data['cart'],
                        'amount' => $this->send_data['amount']
                    ])
                    ->subject('Order Notification')->view('mails.vendorordernotification', ['request'=>$request]);
    }
}
