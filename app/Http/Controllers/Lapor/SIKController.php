<?php

namespace App\Http\Controllers\Lapor;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\SIK;

class SIKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.pelapor');
    }

    public function index()
    {
        return view('admin.sik.index', [
            'title' => 'Laporan SIK',
            'laporanSIK' => SIK::all()
        ]);
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
}
