<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function daftar(Request $data)
    {
        // Inserta data pengguna ke tabel users
        DB::table('users')->insert([
            'nama' => $data->nama,
            'username' => $data->username,
            'password' => Hash::make($data->password),
            'email' => $data->email,
            'telepon' => $data->telepon,
            'jenis_kelamin' => $data->jenis_kelamin,
            'jenis_pengguna' => 'Pelapor',
            'alamat' => $data->alamat
        ]);

        // Proses login setela  h daftar
        auth()->attempt($data->only('username', 'password'));

        if (auth()->user()->jenis_pengguna == 'Pelapor') {
            session()->put('pelapor', auth()->user());
            auth()->logout();

            $path = '/';
        } else if (auth()->user()->jenis_pengguna == 'Admin') {
            $path = '/dashboard';
        }

        // Redirect ke halaman pelapor
        return redirect()->to($path);
    }
}
