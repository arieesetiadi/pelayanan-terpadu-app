<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KirimValidasiToReskrim extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $fileName, $reskrim;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->reskrim = User::where('jenis_pengguna', 'AdminReskrim')->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this
            ->to($this->reskrim)
            ->subject('Pelaporan Tindak Kriminal Perlu Ditindaklanjuti')
            ->view('email.validasi-reskrim');

        $mail->attach(public_path('assets-user\upload\\') . $this->fileName);

        return $mail;
    }
}
