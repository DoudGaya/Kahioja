<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Models\User;


class verifyEmail extends Mailable
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
        // return $this->subject('Verify Email Address')->view('mails.verifyemail', ['request'=>$request]);
        return $this->from('info@kahioja.com')
                    ->with([
                        'name' => $this->send_data['name'],
                        'verification_code' => $this->send_data['verification_code'],
                    ])
                    ->subject('Verify Email Address')->view('mails.verifyemail', ['request'=>$request]);
    }
}
