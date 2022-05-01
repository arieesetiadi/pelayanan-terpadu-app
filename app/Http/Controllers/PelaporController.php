<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function index()
    {
        // Redirect ke halaman Pelapor
        return view('pelapor.index');
    }
}
