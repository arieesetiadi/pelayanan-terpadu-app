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
        $status = auth()->attempt($data->only('username', 'password'));

        if ($status == true) {
            switch (auth()->user()->jenis_pengguna) {
                case 'Admin':
                    // Redirect ke dashboard
                    return redirect()->to('/dashboard');
                case 'Pelapor':
                    // Redirect ke homepage
                    $to = session('to') ?? '/';
                    return redirect()->to($to);
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
