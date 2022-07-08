<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadSIK(Request $data)
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
