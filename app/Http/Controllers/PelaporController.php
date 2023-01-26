<?php

namespace App\Http\Controllers;

use App\Models\Pelapor;
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
        // Update data pelapor
        $pelapor = Pelapor::find($request->id);
        $pelapor->update([
            'NAMA_LENGKAP' => $request->nama,
            'EMAIL_PELAPOR' => $request->email,
            'TELEPON_PELAPOR' => $request->telepon,
            'ALAMAT_PELAPOR' => $request->alamat,
        ]);

        // Update session login untuk pelapor
        session()->put('pelapor', $pelapor);

        return back()->with('success', 'Berhasil mengubah data profile');
    }
}
