<?php

use App\Models\Laporan\SIK;
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
    }

    return $laporan;
}

function getNamaPelaporByNotification($notifikasi)
{
    switch ($notifikasi->tipe) {
        case 'sik':
            $laporan = SIK::find($notifikasi->laporan_id);
            return isset($laporan->nama_penanggung_jawab) ? $laporan->nama_penanggung_jawab : null;
        case 'sktlk':
            $laporan = SKTLK::find($notifikasi->laporan_id);
            return 'Pelapor';
    }
}

function isImage($fileName)
{
    $fileNames = explode(".", $fileName);
    $format = strtolower($fileNames[count($fileNames) - 1]);

    return $format == "png" || $format == "jpg" || $format === "jpeg";
}
