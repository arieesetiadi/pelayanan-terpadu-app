<?php

namespace App\Http\Controllers\Lapor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SIKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.pelapor');
    }

    public function upload(Request $data)
    {
        // Upload file laporan SIK
        $path = 'assets-user/upload/';

        uploadFile($data->file('proposalKegiatan'), $path);
        uploadFile($data->file('izinTempat'), $path);
        uploadFile($data->file('izinInstansi'), $path);
        uploadFile($data->file('fotokopiPaspor'), $path);
        uploadFile($data->file('rekomendasiPolsek'), $path);

        return back()->with('success', 'Berhasil mengirim berkas laporan');
    }
}
