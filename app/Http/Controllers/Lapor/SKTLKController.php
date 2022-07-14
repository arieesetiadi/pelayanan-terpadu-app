<?php

namespace App\Http\Controllers\Lapor;

use App\Http\Controllers\Controller;
use App\Models\Laporan\SKTLK;
use Illuminate\Http\Request;

class SKTLKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.pelapor');
    }

    public function upload(Request $request)
    {
        // Proses upload data ke database
        SKTLK::insert($request->all());

        return back()->with('success', 'Laporan anda sedang diproses');
    }
}
