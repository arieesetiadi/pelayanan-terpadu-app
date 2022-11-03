<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $data)
    {
        $result = auth()->attempt($data->only('username', 'password'));

        if ($result == true) {
            // Redirect back jika status user nonaktif
            if (!auth()->user()->status) {
                return back()->with('failed', 'Pengguna berstatus tidak aktif, silahkan cek alamat email untuk malakukan aktivasi.');
            }

            switch (auth()->user()->jenis_pengguna) {
                case 'Pelapor':
                    // Redirect ke homepage
                    $to = session('to') ?? '/';
                    return redirect()->to($to);

                case 'AdminSPKT' || 'AdminReskrim' || 'KanitSPKT':
                    // Redirect ke dashboard
                    return redirect()->to('/dashboard');
            }
        } else {
            return back()->with('failed', 'Username / password tidak valid.');
        }
    }

    // Fungsi logout untuk admin
    public function logout()
    {
        // Proses logout
        auth()->logout();
        $path = '/login';
        session()->remove('to');

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
