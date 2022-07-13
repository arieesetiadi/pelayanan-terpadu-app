<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginView(Request $request)
    {
        return view('login');
    }

    public function login(Request $data)
    {
        // Proses login setelah daftar
        $status = auth()->attempt($data->only('username', 'password'));

        if ($status == true) {
            if (auth()->user()->jenis_pengguna == 'Pelapor') {
                session()->put('pelapor', auth()->user());
                auth()->logout();

                $to = session('to') ?? '/';

                return redirect()->to($to);
            } else if (auth()->user()->jenis_pengguna == 'Admin') {
                return redirect()->to('/dashboard');
            }
        } else {
            // Jika login gagal, kembali ke halaman login
            return back()->with('failed', 'Username / password tidak valid.');
        };
    }

    // Fungsi logout untuk admin
    public function logout()
    {
        // Proses logout
        auth()->logout();
        $path = '/login';

        // Redirect ke halaman login
        return redirect()->to($path);
    }

    // Fungsi logout untuk pelapor
    public function logoutPelapor()
    {
        session()->forget('pelapor');

        $path = '/';

        return redirect()->to($path);
    }
}
