<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $data)
    {
        // Proses login setelah daftar
        $status = auth()->attempt($data->only('username', 'password'));

        if ($status == true) {
            if (auth()->user()->jenis_pengguna == 'Pelapor') {
                return redirect()->to('/');
            } else if (auth()->user()->jenis_pengguna == 'Admin') {
                return redirect()->to('/dashboard');
            }
        } else {
            // Jika login gagal, kembali ke halaman login
            return back()->with('failed', 'Username / password tidak valid.');
        };
    }

    public function logout()
    {
        if (auth()->user()->jenis_pengguna == 'Pelapor') {
            $path = '/';
        } else {
            $path = '/login';
        }

        // Proses logout
        auth()->logout();

        // Redirect ke halaman login
        return redirect()->to($path);
    }
}
