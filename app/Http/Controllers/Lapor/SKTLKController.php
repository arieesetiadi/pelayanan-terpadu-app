<?php

namespace App\Http\Controllers\Lapor;

use App\Http\Controllers\Controller;
use App\Models\Laporan\SKTLK;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class SKTLKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.pelapor');
    }

    public function upload(Request $request)
    {
        // Proses upload data ke database
        $laporan = SKTLK::insert($request->all());

        $toPelapor = [
            'judul' => 'Laporan Berhasil',
            'isi' => 'Anda berhasil melakukan pengajuan laporan dan sedang dalam proses.',
            'tipe' => 'sktlk',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        $toAdmin = [
            'judul' => 'Laporan Masuk',
            'isi' => 'Laporan perlu diproses.',
            'tipe' => 'sktlk',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'admin',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);
        Notifikasi::insert($toAdmin);

        return back()->with('success', 'Laporan anda sedang diproses');
    }
}
