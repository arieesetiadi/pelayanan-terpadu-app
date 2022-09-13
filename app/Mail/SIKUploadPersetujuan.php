<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SIKUploadPersetujuan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $id;
    private $filePersetujuan;

    public function __construct($id, $filePersetujuan)
    {
        $this->id = $id;
        $this->filePersetujuan = $filePersetujuan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to('galuhcandrawardani@gmail.com', 'Galuh')
            ->subject('Surat Izin Keramaian Diterima')
            ->attach(public_path('assets-user\upload\\') . $this->filePersetujuan)
            ->view('email.sik-upload-persetujuan', ['id' => $this->id]);
    }
}
