<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var 
     */
    public $send;
     /** 
     *ч
     * @return void
     */
    public function __construct($send)
    {
        $this->send = $send;
    }

    /**
     * Build the message.
     *
     *  @return $this
     */
    public function build()
    {
        return $this->from('abdualievsultan47@gmail.com')->view('mails.order')->text('mails.order')->with(
            [
            'testVarOne' => '1',
            'testVarTwo' => '2'
        ]);
    }
}
