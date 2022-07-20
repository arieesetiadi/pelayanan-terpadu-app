<?php

use App\Models\Laporan\SKTLK;
use App\Models\Notifikasi;
use Carbon\Carbon;
use Illuminate\Support\Str;

function str($content)
{
    return Str::of($content);
}

function uploadFile($file, $path)
{
    $fileName = '';

    if (!is_null($file)) {
        // Buat nama gambar
        $fileName = time() . '_' . str($file->getClientOriginalName())->lower();

        // Move gambar ke public
        $file->move($path, $fileName);
    }

    return $fileName;
}

function dateFormat($date, $isFull = true)
{
    if ($isFull) {
        return Carbon::make($date)->isoFormat('dddd, D MMMM Y');
    }

    return Carbon::make($date)->isoFormat('D MMMM Y');
}

function timeFormat($time)
{
    return Carbon::make($time)->format('H:i');
}

function getSKTLKDocumentById($id)
{
    $sktlk = SKTLK::find($id);

    $document['fotoKTP'] = $sktlk->foto_ktp;
    $document['fotoPelapor'] = $sktlk->foto_pelapor;
    $document['rekomendasiInstansi'] = $sktlk->rekomendasi_instansi;
    $document['dokumenTambahan'] = $sktlk->dokumen_tambahan;

    return $document;
}

function getLaporanByNotif($notifikasi)
{
    $laporan = null;

    switch ($notifikasi->tipe) {
        case 'sktlk':
            $laporan = SKTLK::find($notifikasi->laporan_id);
            break;
    }

    return $laporan;
}
