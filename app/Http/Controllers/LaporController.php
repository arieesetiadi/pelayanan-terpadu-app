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
        uploadFile($data->file('proposalKegiatan'), 'assets-user/upload/');
        uploadFile($data->file('izinTempat'), 'assets-user/upload/');
        uploadFile($data->file('izinInstansi'), 'assets-user/upload/');
        uploadFile($data->file('fotokopiPaspor'), 'assets-user/upload/');
        uploadFile($data->file('rekomendasiPolsek'), 'assets-user/upload/');
        dd('Uploaded Successfully !');
    }
}
