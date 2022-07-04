<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporSIKController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload(Request $data)
    {
        dd($data->allFiles());
    }
}
