<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Notifikasi;
use App\Models\Laporan\SIK;
use App\Models\Laporan\SKTLK;
use App\Models\Laporan\SP2HP;

class NotifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detail($id)
    {
        // Ubah status menjadi telah dibaca
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
                return back();
            case 'sik':
                if ($laporan->dokumen_persetujuan != '') {
                    return redirect()->to(asset('assets-user/upload/' . $laporan->dokumen_persetujuan));
                } elseif (($laporan->status && $laporan->nama_organisasi == '') || ($laporan->status_pernyataan == 'draft')) {
                    return view('form.lapor-sik-2', [
                        'laporan' => $laporan
                    ]);
                } elseif ($laporan->status == false) {
                    return view('form.lapor-sik', [
                        'laporan' => $laporan
                    ]);
                }
                break;
            case 'sp2hp':
                if ($laporan->perkembangan == 'Selesai') {
                    return back();
                } elseif ($laporan->status && $laporan->file_pemberitahuan) {
                    return redirect()->to(asset('assets-user/upload/' . $laporan->file_pemberitahuan));
                } elseif (!$laporan->status) {
                    return view('form.lapor-sp2hp', [
                        'laporan' => $laporan,
                        'saksi' => json_decode($laporan->saksi),
                        'bukti' => json_decode($laporan->bukti),
                    ]);
                }
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
                $data['laporan'] = SKTLK::find($notifikasi->laporan_id);
                $data['title'] = 'Verifikasi SKTLK';
                return view('admin.sktlk.notifikasi', $data);

            case 'sik':
                $sik = SIK::find($notifikasi->laporan_id);
                // Jika sudah disetujui & data lengkap, maka export PDF
                if ($sik->status == true && $sik->nama_organisasi != null) {
                    // Export PDF
                    $data = [
                        'laporan' => $sik,
                        'logoPolriPath' => public_path('\assets-user\img\documents\logo-polri-black.png'),
                        'ttdPath' => public_path('\assets-user\img\documents\ttd galuh.png'),
                    ];
                    $pdf = PDF::loadview('pdf.notifikasi-sik', $data);
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
            case 'sp2hp':
                $laporan = SP2HP::find($notifikasi->laporan_id);
                if ($laporan->status == null && $laporan->perkembangan == null) {
                    $data = [
                        'title' => 'Validasi Pelaporan',
                        'laporan' => $laporan,
                        'logoPolriPath' => public_path('\assets-user\img\documents\logo-polri-black.png'),
                        'terlapor' => explode(',', trim($laporan->terlapor, ' ')),
                        'saksi' => json_decode($laporan->saksi),
                        'bukti' => json_decode($laporan->bukti),
                    ];
                    return view('admin.sp2hp.notifikasi', $data);
                } elseif ($laporan->status) {
                    // Export PDF
                    $data = [
                        'title' => 'Validasi Pelaporan',
                        'laporan' => $laporan,
                        'logoPolriPath' => public_path('\assets-user\img\documents\logo-polri-black.png'),
                        'terlapor' => $laporan->terlapor,
                        'saksi' => json_decode($laporan->saksi),
                        'bukti' => json_decode($laporan->bukti),
                    ];
                    $pdf = PDF::loadview('pdf.validasi-sp2hp', $data);
                    return $pdf->stream('validasi-sp2hp.pdf');
                }
        }
    }
}
