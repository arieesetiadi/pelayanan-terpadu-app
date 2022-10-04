<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SP2HPInvalid extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $pelapor, $keteranganInvalid, $id;

    public function __construct($pelapor, $keteranganInvalid, $id)
    {
        $this->pelapor = $pelapor;
        $this->keteranganInvalid = $keteranganInvalid;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to($this->pelapor)
            ->subject('Pelaporan SP2HP Tidak Valid')
            ->view('email.sp2hp-invalid', [
                'keteranganInvalid' => $this->keteranganInvalid,
                'id' => $this->id
            ]);
    }
}
