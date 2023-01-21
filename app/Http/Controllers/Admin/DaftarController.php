<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mail\UserVerification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\New\Pelapor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DaftarController extends Controller
{
    public function daftar(Request $data)
    {
        $id = self::generateID();
        $password = Hash::make($data->password);

        Pelapor::create([
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

    public static function generateID(){
        $count = Pelapor::count();
        $id = "P0" . $count + 1;
        return $id;
    }
}
