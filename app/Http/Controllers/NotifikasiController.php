<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SKTLK;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class NotifikasiController extends Controller
{
    public function detail($id)
    {
        Notifikasi::find($id)->update([
            'telah_dibaca' => true
        ]);

        session()->put('notifikasi', Notifikasi::getNotifikasiPelapor());

        return back();
    }

    public function cetakPDF($id)
    {
        $notifikasi = Notifikasi::find($id);

        // Cek jenis laporan
        switch ($notifikasi->tipe) {
            case 'sktlk':
                // Ambil data laporan dari database
                $laporan = SKTLK::find($notifikasi->laporan_id);

                $data = [
                    'laporan' => $laporan,
                    'suratHilang' => explode(',', trim($laporan->surat_hilang, ' '))
                ];

                $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('pdf.notifikasi-sktlk', $data);
                return $pdf->stream('laporan.pdf');

            case 'sik':
                // $laporan = SIK::find($notifikasi->laporan_id);
                dd('SIK');
                break;
        }
    }
}
