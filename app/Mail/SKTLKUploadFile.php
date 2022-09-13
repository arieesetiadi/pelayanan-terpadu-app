<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SKTLKUploadFile extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $id;
    private $file;
    private $pelapor;

    public function __construct($id, $file, $pelapor)
    {
        $this->id = $id;
        $this->file = $file;
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
            ->to($this->pelapor->email, $this->pelapor->nama)
            ->subject('Pelaporan SKTLK Telah Disetujui')
            ->attach(public_path('assets-user\upload\\') . $this->file)
            ->view('email.sktlk-upload-file', ['id' => $this->id]);
    }
}
