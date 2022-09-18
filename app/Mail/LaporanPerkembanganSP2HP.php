<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LaporanPerkembanganSP2HP extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $perkembangan, $keterangan, $pelapor;

    public function __construct($perkembangan, $keterangan, $pelapor)
    {
        $this->perkembangan = $perkembangan;
        $this->keterangan = $keterangan;
        $this->pelapor = $pelapor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['keterangan'] = $this->keterangan;
        
        return $this
        ->to($this->pelapor)
        ->subject('Perkembangan SP2HP')
        ->attach(public_path('assets-user\upload\\') . $this->perkembangan)
        ->view('email.sp2hp-upload-perkembangan', $data);
    }
}
