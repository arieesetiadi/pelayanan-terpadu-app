<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login-admin');
    }

    public function login(Request $data)
    {
        // Ambil data dari form login
        $username = $data->username;
        $pasword = $data->password;

        // Check keberadaan pegawai
        $pegawai = Pegawai::where('USERNAME_PEGAWAI', $username)->with('jabatan', 'divisi')->first();
        if (!$pegawai) {
            return back()->with('failed', 'Username / password tidak valid.');
        }

        // Verify password
        $verified = Hash::check($pasword, $pegawai->PASSWORD_PEGAWAI);
        if (!$verified) {
            return back()->with('failed', 'Username / password tidak valid.');
        }

        // Set login session untuk pegawai
        session()->put('pegawai', $pegawai);

        return redirect()->to('/dashboard');
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
