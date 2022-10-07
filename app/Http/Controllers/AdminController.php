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
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'countSIK' => count(SIK::getSIK()),
            'countSKTLK' => count(SKTLK::getSKTLK()),
            'countSP2HP' => count(SP2HP::getSP2HP()),
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }
}
