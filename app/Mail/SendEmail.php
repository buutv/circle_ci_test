<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailInfomation)
    {
        //
        $this->mailInfo=$mailInfomation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.info-email');
    }
}
