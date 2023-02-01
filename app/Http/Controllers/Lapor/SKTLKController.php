<?php

namespace App\Http\Controllers\Lapor;

use PDF;
use App\Http\Controllers\Controller;
use App\Mail\SKTLKUploadFile;
use App\Models\DetailLokasiKejadian;
use App\Models\Kecamatan;
use App\Models\Laporan\SKTLK;
use App\Models\Notifikasi;
use App\Models\NotifPelSKTLK;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SKTLKController extends Controller
{
    public function index()
    {
        $laporanSKTLK = session('laporanSKTLK') ?? SKTLK::getSKTLK();
        $old = session('old') ?? null;

        return view('admin.sktlk.index', [
            'title' => 'Laporan SKTLK',
            'laporanSKTLK' => $laporanSKTLK,
            'old' => $old
        ]);
    }

    public function upload(Request $request)
    {
        // Cek kecamatan lokasi kejadian
        $kecamatan = Kecamatan::where('NAMA_KECAMATAN', $request->lokasiKejadian)->first();
        if (!$kecamatan) {
            $kecamatan = Kecamatan::create([
                'ID_KECAMATAN' => 'K0' . (Kecamatan::count() + 1),
                'NAMA_KECAMATAN' => $request->lokasiKejadian
            ]);
        }

        // Prepare data detail lokasi kejadian
        $detailLokasiKejadian = [
            'ID_LOKASI_KEJADIAN' => DetailLokasiKejadian::generateID(),
            'ID_KECAMATAN' => $kecamatan->ID_KECAMATAN,
            'NAMA_LOKASI_KEJADIAN' => $request->detailLokasiKejadian
        ];

        // Prepare data sktlk
        $sktlk = [
            'ID_SKTLK' => SKTLK::generateID(),
            'ID_PELAPOR' => session('pelapor')->ID_PELAPOR,
            'ID_LOKASI_KEJADIAN' => $detailLokasiKejadian['ID_LOKASI_KEJADIAN'],
            'SURAT_HILANG' => $request->suratHilang,
            'FOTO_KTP_PELAPOR_SKTLK' => uploadFile($request['fotoKtp'], 'assets-user/upload/'),
            'TGL_LAPOR_SKTLK' => now(),
            'TGL_KEJADIAN_SKTLK' => Carbon::make($request->tanggalKejadian),
            'STATUS_LAPOR_SKTLK' => 'PROCESSING'
        ];

        // Prepare notif data
        $notifikasi = [
            'ID_NOTIFIKASI' => Notifikasi::generateID(),
            'NAMA_NOTIFIKASI' => 'Pelaporan SKTLK Masuk',
            'ISI_NOTIFIKASI' => 'Pelaporan perlu diproses.',
            'STATUS_NOTIFIKASI' => 'Belum Dibaca'
        ];

        $notifPelSKTLK = [
            'ID_NOTIFIKASI' => $notifikasi['ID_NOTIFIKASI'],
            'ID_SKTLK' => $sktlk['ID_SKTLK'],
            'ID_PELAPOR' => session('pelapor')->ID_PELAPOR,
            'TIPE_NOTIF' => 'sktlk',
            'TGL_NOTIF_SKTLK' => now()
        ];

        // Insert data
        DetailLokasiKejadian::create($detailLokasiKejadian);
        SKTLK::create($sktlk);
        Notifikasi::create($notifikasi);
        NotifPelSKTLK::create($notifPelSKTLK);

        return back()->with('success', 'Pelaporan anda sedang diproses');
    }

    public function uploadFile(Request $request)
    {
        // Upload file persetujuan
        $path = 'assets-user/upload/';
        $namaFile = uploadFile($request->file('file'), $path);

        // Insert ke database
        $laporan = SKTLK::find($request->id);
        $laporan->update([
            'dokumen_persetujuan' => $namaFile
        ]);

        $pelapor = User::find($laporan->pelapor_id);

        // Buat notifikasi
        $toPelapor = [
            'judul' => 'Pelaporan SKTLK Telah Disetujui',
            'isi' => 'Dokumen persetujuan SKTLK dapat diunduh disini.',
            'tipe' => 'sktlk',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $request->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dokumen_persetujuan' => $namaFile,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);

        // Kirim notifikasi ke pelapor
        Mail::send(new SKTLKUploadFile($request->id, $namaFile, $pelapor));

        return back()->with('success', 'Dokumen persetujuan berhasil diunggah.');
    }

    public function downloadPernyataan(Request $request)
    {
        // Download pernyataan keaslian do kumen
        $data = [
            'namaLengkap' => $request->pernyataanNamaLengkap,
            'tempatLahir' => $request->pernyataanTempatLahir,
            'tanggalLahir' => $request->pernyataanTanggalLahir,
            'alamat' => $request->pernyataanAlamat,
            'telepon' => $request->pernyataanTelepon,
        ];

        $pdf = PDF::loadview('pdf.pernyataan-keaslian-sktlk', $data);
        return $pdf->stream('pernyataan-keaslian.pdf');
    }

    // Fungsi untuk menghapus data SKTLK
    public function hapus($id)
    {
        // Hapus SKTLK
        SKTLK::find($id)->delete();

        // Hapus notifikasi dari SKTLK
        Notifikasi
            ::where('tipe', 'sktlk')
            ->where('laporan_id', $id)
            ->delete();

        return redirect()->to('admin/sktlk')->with('success', 'Anda berhasil menghapus data');
    }

    public function filterDate(Request $request)
    {
        $keyword = $request->keyword;

        $dates = explode(" - ", $request->dateFilter);

        $start = $dates[0];
        $end = $dates[1];

        $laporan = SKTLK::getFilteredByDate($start, $end, $keyword);
        return redirect()->to('/admin/sktlk')->with('laporanSKTLK', $laporan)->with('old', $request->all());
    }

    public function pdf(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSKTLK'] = SKTLK::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSKTLK'] = SKTLK::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSKTLK'] = SKTLK::searchSKTLK($keyword);
        } else {
            $data['laporanSKTLK'] = SKTLK::getSKTLK();
        }

        $pdf = PDF::loadview('pdf.sktlk-all', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-sktlk.pdf');
    }

    public function excel(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSKTLK'] = SKTLK::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSKTLK'] = SKTLK::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSKTLK'] = SKTLK::searchSKTLK($keyword);
        } else {
            $data['laporanSKTLK'] = SKTLK::getSKTLK();
        }

        return view('excel.sktlk', $data);
    }

    public function suratKeterangan($id)
    {
        // Ambil data laporan dari database
        $laporan = SKTLK::find($id);
        $data = [
            'title' => 'Surat Keterangan SKTLK',
            'laporan' => $laporan,
            'suratHilang' => explode(',', trim($laporan->surat_hilang, ' ')),
            'logoPolriPath' => public_path('\assets-user\img\documents\logo-polri-black.png'),
            'ttdPath' => public_path('\assets-user\img\documents\ttd galuh.png'),
        ];

        $pdf = PDF::loadview('pdf.notifikasi-sktlk', $data);
        return $pdf->stream('laporan.pdf');
    }
}
