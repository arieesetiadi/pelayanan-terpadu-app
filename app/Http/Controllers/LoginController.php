<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $data)
    {
        // Ambil data dari form login
        $username = $data->username;
        $pasword = $data->password;

        // Check keberadaan pelapor
        $pelapor = Pelapor::where('USERNAME_PELAPOR', $username)->first();
        if (!$pelapor) {
            return back()->with('failed', 'Username / password tidak valid.');
        }

        // Verify password
        $verified = Hash::check($pasword, $pelapor->PASSWORD_PELAPOR);
        if (!$verified) {
            return back()->with('failed', 'Username / password tidak valid.');
        }

        // Check status pelapor
        $status = $pelapor->STATUS_PELAPOR;
        if (!$status) {
            return back()->with('failed', 'Pengguna berstatus tidak aktif, silahkan cek alamat email untuk malakukan aktivasi.');
        }

        // Set login session untuk Pelapor
        session()->put('pelapor', $pelapor);

        // Redirect ke homepage
        $to = session('to') ?? '/';
        return redirect()->to($to);
    }

    // Fungsi logout untuk pelapoe
    public function logout()
    {
        // Proses logout
        session()->remove('pelapor');
        session()->remove('to');

        // Redirect ke halaman login
        return redirect()->to('/login');
    }
}
