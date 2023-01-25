<?php

namespace App\Http\Controllers;

use App\Mail\PelaporActivation;
use App\Models\Pelapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DaftarController extends Controller
{
    public function daftar(Request $data)
    {
        $id = Pelapor::generateID();
        $password = Hash::make($data->password);

        $pelapor = Pelapor::create([
            'ID_PELAPOR' => $id,
            'NAMA_LENGKAP' => $data->nama,
            'TEMPAT_LAHIR' => $data->tempatLahir,
            'TANGGAL_LAHIR' => $data->tanggalLahir,
            'TELEPON_PELAPOR' => $data->telepon,
            'JENIS_KELAMIN' => $data->jenis_kelamin,
            'ALAMAT_PELAPOR' => $data->alamat,
            'USERNAME_PELAPOR' => $data->username,
            'PASSWORD_PELAPOR' => $password,
            'EMAIL_PELAPOR' => $data->email,
            'STATUS_PELAPOR' => false,
        ]);

        // Kirim email verifikasi
        Mail::send(new PelaporActivation($pelapor));

        // Redirect ke halaman pelapor
        return redirect()->to('/login')->with('success', 'Pendaftaran akun berhasil, silahkan cek alamat ' . $data->email . ' untuk melakukan aktivasi akun.');
    }

    public function activation($id)
    {
        // Aktifkan status pelapor
        Pelapor::find($id)->update([
            'STATUS_PELAPOR' => true
        ]);

        // Redirect ke halaman login
        return redirect()->to('/login')->with('success', 'Akun anda telah berhasil diaktifkan.');
    }
}
