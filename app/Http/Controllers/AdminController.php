<?php

namespace App\Http\Controllers;

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
            'title' => 'Dashboard'
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }
}
