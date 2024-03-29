<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SIKDitolak extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $id;
    private $alasanPenolakan;
    private $pelapor;

    public function __construct($id, $alasanPenolakan, $pelapor)
    {
        $this->id = $id;
        $this->alasanPenolakan = $alasanPenolakan;
        $this->pelapor = $pelapor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'id' => $this->id,
            'alasanPenolakan' => $this->alasanPenolakan
        ];

        return $this
            ->to($this->pelapor->email, $this->pelapor->nama)
            ->subject('Laporan SIK Ditolak')
            ->view('email.sik-ditolak', $data);
    }
}
