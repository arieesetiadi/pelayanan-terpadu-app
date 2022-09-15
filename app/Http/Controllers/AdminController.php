<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SIK;
use App\Models\Laporan\SKTLK;
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
            'countSIK' => SIK::count(),
            'countSKTLK' => SKTLK::count(),
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }
}
