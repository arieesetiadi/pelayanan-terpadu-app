<?php

use App\Models\Laporan\SIK;
use App\Models\Laporan\SKTLK;
use App\Models\Laporan\SP2HP;
use App\Models\Notifikasi;
use App\Models\User;
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

function dateTimeFormat($date)
{
    return Carbon::make($date)->isoFormat('dddd, D MMMM Y hh:mm a');
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

function humanTimeFormat($date)
{
    return Carbon::make($date)->diffForHumans();
}

function getSKTLKDocumentById($id)
{
    $sktlk = SKTLK::find($id);

    $document['fotoKTP'] = $sktlk->foto_ktp;
    $document['fotoPelapor'] = $sktlk->foto_pelapor;
    $document['rekomendasiInstansi'] = $sktlk->rekomendasi_instansi;
    $document['pernyataanKeaslian'] = $sktlk->pernyataan_keaslian;
    $document['dokumenTambahan'] = $sktlk->dokumen_tambahan;

    return $document;
}

function getSIKDocumentById($id)
{
    $sik = SIK::find($id);

    $document['proposalKegiatan'] = $sik->proposal_kegiatan;
    $document['izinTempat'] = $sik->izin_tempat;
    $document['izinInstansi'] = $sik->izin_instansi;
    $document['fotokopiPaspor'] = $sik->fotokopi_paspor;
    $document['rekomendasiPolsek'] = $sik->rekomendasi_polsek;
    $document['fotoKtp'] = $sik->foto_ktp;
    $document['fotoPelapor'] = $sik->foto_pelapor;

    return $document;
}

function getLaporanByNotif($notifikasi)
{
    $laporan = null;

    switch ($notifikasi->tipe) {
        case 'sktlk':
            $laporan = SKTLK::find($notifikasi->laporan_id);
            break;
        case 'sik':
            $laporan = SIK::find($notifikasi->laporan_id);
            break;
        case 'sp2hp':
            $laporan = SP2HP::find($notifikasi->laporan_id);
            break;
    }

    return $laporan;
}

function getNamaPelaporByNotification($notifikasi)
{
    return User::find($notifikasi->pelapor_id)->nama;
}

function isImage($fileName)
{
    $fileNames = explode(".", $fileName);
    $format = strtolower($fileNames[count($fileNames) - 1]);

    return $format == "png" || $format == "jpg" || $format === "jpeg";
}

function generateNomorPolisi()
{
    $laporan = SP2HP::orderBy('id', 'desc')->get()[0];
    $nomorPolisi = $laporan->nomor_polisi;

    if (!$nomorPolisi) {
        $nomor = 1;
    } else {
        $nomor = explode('/', $nomorPolisi)[1] + 1;
    }

    $bulan = intToRomawi(now()->month);
    $tahun = now()->year;

    return "LP/00$nomor/K/$bulan/$tahun/Polres Badung";
}

function intToRomawi($angka)
{
    $angka = intval($angka);
    $result = '';

    $array = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($array as $roman => $value) {
        $matches = intval($angka / $value);

        $result .= str_repeat($roman, $matches);

        $angka = $angka % $value;
    }

    return $result;
}
