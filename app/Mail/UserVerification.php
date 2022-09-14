<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $id;
    private $user;

    public function __construct($id, $user)
    {
        $this->id = $id;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to($this->user['email'], $this->user['nama'])
            ->subject('Aktivasi Akun')
            ->view('email.user-verification', ['id' => $this->id]);
    }
}
