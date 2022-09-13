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

    public function __construct($id, $alasanPenolakan)
    {
        $this->id = $id;
        $this->alasanPenolakan = $alasanPenolakan;
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
            ->to('galuhcandrawardani@gmail.com', 'Galuh')
            ->subject('Laporan SIK Ditolak')
            ->view('email.sik-ditolak', $data);
    }
}
