<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function detail($id)
    {
        Notifikasi::find($id)->update([
            'telah_dibaca' => true
        ]);

        session()->put('notifikasi', Notifikasi::getNotifikasiPelapor());

        return back();
    }
}
