<?php

namespace App\Http\Controllers\Lapor;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\SIK;

class SIKController extends Controller
{
    public function index()
    {
        return view('admin.sik.index', [
            'title' => 'Laporan SIK',
            'laporanSIK' => SIK::orderBy('id', 'desc')->get()
        ]);
    }

    public function setuju($id)
    {
        // Mengubah status dari SIK
        $laporan = SIK::find($id);
        $laporan->update([
            'status' => true
        ]);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Dokumen Disetujui',
            'isi' => 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);

        // Redirect ke halaman admin SIK
        return back()->with('success', 'Berhasil menyetujui dokumen persyaratan');
    }

    public function tolak(Request $request)
    {
        $laporan = SIK::find($request->id);
        $laporan->update([
            'status' => false
        ]);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Dokumen Ditolak',
            'isi' => 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        session()->put("alasan-$laporan->id", $request->alasanPenolakan);

        Notifikasi::insert($toPelapor);

        // Redirect ke halaman admin SIK
        return back()->with('success', 'Anda telah menolak dokumen persyaratan');
    }

    public function upload(Request $data)
    {
        // Insert nama file ke database
        $laporan = SIK::insert($data->all());

        // Kirim notifikasi
        $toPelapor = [
            'judul' => 'Laporan Berhasil',
            'isi' => 'Anda berhasil mengunggah dokumen dan sedang dalam proses pengecekkan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        $toAdmin = [
            'judul' => 'Dokumen Persyaratan SIK Masuk',
            'isi' => 'Dokumen perlu pengecekkan kelengkapan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'admin',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);
        Notifikasi::insert($toAdmin);

        return back()->with('success', 'Berhasil mengirim dokumen persyaratan');
    }

    public function uploadForm(Request $data)
    {
        // Insert data form ke database
        SIK::insertForm($data->all());

        // Redirect ke beranda
        return redirect()->to('/pengaduan-masyarakat/sik')->with('success', 'Data Izin Keramaian berhasil dikirim');
    }
}
