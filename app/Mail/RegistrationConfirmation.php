<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->url = 'https://nicocktail.nicolasmercier.io/verify/' . $this->user->id . '/' . $this->user->register_token;
        //$this->url = 'http://localhost:4200/verify/' . $this->user->id . '/' . $this->user->register_token;

        return $this
            ->from('hello@nicolasmercier.io')
            ->view('emails.register.confirmation');
    }
}
