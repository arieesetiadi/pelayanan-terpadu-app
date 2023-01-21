<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function update(Request $request)
    {
        User::find($request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return back()->with('success', 'Berhasil mengubah data profile');
    }
}
