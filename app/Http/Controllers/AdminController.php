<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SIK;
use App\Models\Laporan\SKTLK;
use App\Models\Laporan\SP2HP;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $data = [];

        if (session('laporan')) {
            $laporan = session('laporan');

            $data = [
                'laporanSKTLK' => $laporan['SKTLK'],
                'laporanSIK' => $laporan['SIK'],
                'laporanSP2HP' => $laporan['SP2HP'],
            ];
        }

        $data['title'] = 'Dashboard';
        $data['countSIK'] = count(SIK::getSIK());
        $data['countSKTLK'] = count(SKTLK::getSKTLK());
        $data['countSP2HP'] = count(SP2HP::getSP2HP());

        return view('admin.dashboard', $data);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }
}
