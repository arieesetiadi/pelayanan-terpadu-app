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
            // Redirect ke halaman pelapor
            return redirect()->to('/pelapor');
        } else {
            // Jika login gagal, kembali ke halaman login
            return back()->with('failed', 'Username / password tidak valid.');
        };
    }

    public function logout()
    {
        // Proses logout
        auth()->logout();

        // Redirect ke halaman login
        return redirect()->to('/login');
    }
}
