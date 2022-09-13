<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SIKDisetujui extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $id;
    private $pelapor;

    public function __construct($id, $pelapor)
    {
        $this->id = $id;
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
            ->subject('Laporan SIK Telah Disetujui')
            ->view('email.sik-disetujui', ['id' => $this->id]);
    }
}
