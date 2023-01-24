<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PelaporActivation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $pelapor;

    public function __construct($pelapor)
    {
        $this->pelapor = $pelapor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this
            ->to($this->pelapor['EMAIL_PELAPOR'], $this->pelapor['NAMA_LENGKAP'])
            ->subject('Aktivasi Akun')
            ->view('email.pelapor-activation', ['id' => $this->pelapor['ID_PELAPOR']]);
    }
}
