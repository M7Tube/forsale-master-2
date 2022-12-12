<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Code extends Mailable
{
    use Queueable, SerializesModels;
    public $serial_number;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($serial_number)
    {
        $this->serial_number=$serial_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.code')->subject(__('Activation Code'));
    }
}
