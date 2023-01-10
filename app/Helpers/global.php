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
        $fileName = stringClean($fileName);

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

function getSaksi($keys, $data)
{
    // Ambil hanya nama saksi dari form SP2HP
    $indexNama = array_filter($keys, function ($key) {
        return str_contains($key, 'namaSaksi');
    });
    $nama = [];
    foreach ($indexNama as $i) {
        $nama[] = $data[$i];
    }

    // Ambil hanya umur saksi dari form SP2HP
    $indexUmur = array_filter($keys, function ($key) {
        return str_contains($key, 'umurSaksi');
    });
    $umur = [];
    foreach ($indexUmur as $i) {
        $umur[] = $data[$i];
    }

    // Ambil hanya pekerjaan saksi dari form SP2HP
    $indexPekerjaan = array_filter($keys, function ($key) {
        return str_contains($key, 'pekerjaanSaksi');
    });
    $pekerjaan = [];
    foreach ($indexPekerjaan as $i) {
        $pekerjaan[] = $data[$i];
    }

    // Ambil hanya alamat saksi dari form SP2HP
    $indexAlamat = array_filter($keys, function ($key) {
        return str_contains($key, 'alamatSaksi');
    });
    $alamat = [];
    foreach ($indexAlamat as $i) {
        $alamat[] = $data[$i];
    }

    return json_encode([
        'nama' => $nama,
        'umur' => $umur,
        'pekerjaan' => $pekerjaan,
        'alamat' => $alamat
    ]);
}

function getBukti($keys, $data)
{
    // Ambil hanya nama bukti dari form SP2HP
    $indexNamaBukti = array_filter($keys, function ($key) {
        return str_contains($key, 'namaBukti');
    });
    $namaBukti = [];
    foreach ($indexNamaBukti as $i) {
        $namaBukti[] = $data[$i];
    }

    // Ambil hanya nama bukti dari form SP2HP
    $indexGambarBukti = array_filter($keys, function ($key) {
        return str_contains($key, 'gambarBukti');
    });
    $gambarBukti = [];
    foreach ($indexGambarBukti as $i) {
        $path = 'assets-user/upload/';
        $namaFile = uploadFile($data[$i], $path);
        $gambarBukti[] = $namaFile;
    }

    return json_encode([
        'namaBukti' => $namaBukti,
        'gambarBukti' => $gambarBukti
    ]);
}

function ageFormat($date)
{
    $birth = Carbon::make($date);
    $now = now();

    return $birth->diffInYears($now);
}

function getNotifSP2HP($laporanId)
{
    return Notifikasi::where('laporan_id', $laporanId)->where('tipe', 'sp2hp')->orderBy('id', 'desc')->get()[0]->id;
}

function getMonthsPeriod($start, $end)
{
    $start = explode('-', $start);
    $end = explode('-', $end);

    $months = [];

    $current = Carbon::create($start[1], $start[0]);
    $finish = Carbon::create($end[1], $end[0]);

    while ($current->lte($finish)) {
        $months[] = $current->toDateString();

        $current->addMonth(1);
    }

    return $months;
}

function getLokasi()
{
    return ['Abiansemal', 'Kuta', 'Kuta Selatan', 'Kuta Utara', 'Mengwi', 'Petang'];
}

function getFilePerkembangan($file)
{
    return array_reverse($file != '' ? explode('|', $file) : []);
}

function getKeteranganPerkembangan($keterangan)
{
    if ($keterangan == '') return [];

    $keterangan = array_map(function ($item) {
        return json_decode($item);
    }, explode('|', $keterangan));

    return array_reverse($keterangan);
}

function stringClean($string)
{
    $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
}
