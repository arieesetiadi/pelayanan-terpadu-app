<?php

namespace App\Http\Controllers;

use App\Mail\UserVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DaftarController extends Controller
{
    public function daftar(Request $data)
    {
        // Insert data pengguna ke tabel users
        $id = DB::table('users')->insertGetId([
            'nama' => $data->nama,
            'username' => $data->username,
            'password' => Hash::make($data->password),
            'email' => $data->email,
            'telepon' => $data->telepon,
            'tempat_lahir' => $data->tempatLahir,
            'tanggal_lahir' => $data->tanggalLahir,
            'pekerjaan' => $data->pekerjaan,
            'alamat' => $data->alamat,
            'kewarganegaraan' => $data->kewarganegaraan,
            'jenis_pengguna' => 'Pelapor',
            'jenis_kelamin' => $data->jenis_kelamin,
            'status' => false
        ]);

        // Kirim email verifikasi
        Mail::send(new UserVerification($id, $data->all()));

        // Redirect ke halaman pelapor
        return redirect()->to('/login')->with('success', 'Pendaftaran akun berhasil, silahkan cek alamat ' . $data->email . ' untuk melakukan aktivasi akun.');
    }

    public function activation($id)
    {
        // Aktifkan status pengguna
        DB::table('users')->where('id', $id)->update([
            'status' => true
        ]);

        // Redirect ke halaman login
        return redirect()->to('/login')->with('success', 'Akun anda telah berhasil diaktifkan.');
    }
}
