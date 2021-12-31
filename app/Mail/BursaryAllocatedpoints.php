<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BursaryAllocatedpoints extends Mailable
{ public $topic, $message, $receiver;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $topic, string $message, string $receiver)
    {
        $this->receiver = $receiver;
        $this->message = $message;
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.BursaryAllocatedpoints')->subject('Bursary Points Allocation');
    }
}
