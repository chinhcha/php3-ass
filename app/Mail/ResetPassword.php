<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;


    public $token ;
    public $user ;
    public function __construct($token,$user)
    {
        $this -> token = $token ;
        $this -> user = $user ;
    }
    public function build(){
            return $this -> view('auth.mail.resetpassword')
            ->with(['user' => $this->user ,
            'token' => $this->token
        ]);
    }


}
