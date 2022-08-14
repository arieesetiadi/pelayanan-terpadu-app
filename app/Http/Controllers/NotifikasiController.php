<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Notifikasi;
use App\Models\Laporan\SIK;
use Illuminate\Http\Request;
use App\Models\Laporan\SKTLK;
use Illuminate\Support\Facades\Session;

class NotifikasiController extends Controller
{
    public function detail($id)
    {
        $notifikasi =  Notifikasi::find($id);
        $notifikasi->update([
            'telah_dibaca' => true
        ]);

        $laporan = getLaporanByNotif($notifikasi);
        session()->put('notifikasi', Notifikasi::getNotifikasiPelapor());

        switch ($notifikasi->tipe) {
            case 'sktlk':
                if ($laporan->dokumen_persetujuan != '') {
                    return redirect()->to(asset('assets-user/upload/' . $laporan->dokumen_persetujuan));
                }
            case 'sik':
                if (($laporan->status && $laporan->nama_organisasi == '') || ($laporan->status_pernyataan == 'draft')) {
                    return view('form.lapor-sik-2', [
                        'laporan' => $laporan
                    ]);
                } elseif ($laporan->status == false) {
                    return view('form.lapor-sik', [
                        'laporan' => $laporan
                    ]);
                }
                break;
        }

        return back();
    }

    public function cetakPDF($id)
    {
        $notifikasi = Notifikasi::find($id);

        // Ubah status menjadi telah dibaca
        $notifikasi->update([
            'telah_dibaca' => true
        ]);

        // Cek jenis laporan
        switch ($notifikasi->tipe) {
            case 'sktlk':
                // Ambil data laporan dari database
                $laporan = SKTLK::find($notifikasi->laporan_id);
                $data = [
                    'laporan' => $laporan,
                    'suratHilang' => explode(',', trim($laporan->surat_hilang, ' ')),
                    'logoPolriPath' => public_path('\assets-user\img\documents\logo-polri-black.png'),
                    'ttdPath' => public_path('\assets-user\img\documents\ttd galuh.png'),
                ];
                $pdf = PDF::loadview('pdf.notifikasi-sktlk', $data);
                return $pdf->stream('laporan.pdf');

            case 'sik':
                $sik = SIK::find($notifikasi->laporan_id);

                // Jika sudah disetujui & data lengkap, maka export PDF
                if ($sik->status == true && $sik->nama_organisasi != null) {
                    // Export PDF
                    $pdf = PDF::loadview('pdf.notifikasi-sik');
                    return $pdf->stream('laporan.pdf');
                } else {
                    // Tampilkan dokumen saja
                    // Notifikasi ketika pelapor melakukan upload dokumen persyaratan
                    $sikDocument = getSIKDocumentById($notifikasi->laporan_id);
                    return view('admin.sik.notifikasi', [
                        'title' => 'Dokumen Persyaratan',
                        'sik' => $sik,
                        'sikDocument' => $sikDocument
                    ]);
                }

                break;
        }
    }
}
