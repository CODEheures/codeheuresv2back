<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SimpleContact extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $emitter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emitter, $message)
    {
        $this->emitter = $emitter;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emitter)->subject('Nouveau message posté de CODEheures.fr')->markdown('emails.simpleContact');
    }
}
