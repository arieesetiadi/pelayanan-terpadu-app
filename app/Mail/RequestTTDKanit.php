<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestTTDKanit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $fileNames, $keterangan;

    public function __construct($fileNames, $keterangan)
    {
        $this->fileNames = $fileNames;
        $this->keterangan = $keterangan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['keterangan'] = $this->keterangan;

        $mail = $this
            ->to('apolresbadung@gmail.com', 'Admin Polres Badung')
            ->subject('Permohonan Tanda Tangan Surat-Surat Pelaporan')
            ->view('email.request-ttd-kanit', $data);

        foreach ($this->fileNames as $fileName) {
            $mail->attach(public_path('assets-user\upload\\') . $fileName);
        }

        return $mail;
    }
}
