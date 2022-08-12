<?php

namespace App\Models\Laporan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTLK extends Model
{
    use HasFactory;

    public $table = 'laporan_sktlk';
    public $timestamps = false;

    protected $guarded = [];

    public static function insert($laporan)
    {
        // Proses upload file
        $path = 'assets-user/upload/';
        $fotoKtp = uploadFile($laporan['fotoKtp'], $path);
        $fotoPelapor = uploadFile($laporan['fotoPelapor'], $path);
        $rekomendasiInstansi = uploadFile($laporan['rekomendasiInstansi'], $path);
        $pernyataanKeaslian = uploadFile($laporan['pernyataanKeaslian'], $path);
        $dokumenTambahan = uploadFile($laporan['dokumenTambahan'] ?? null, $path);

        // Insert data laporan ke database
        return self::create([
            'nama_lengkap' => $laporan['namaLengkap'],
            'tempat_lahir' => $laporan['tempatLahir'],
            'tanggal_lahir' => $laporan['tanggalLahir'],
            'pekerjaan' => $laporan['pekerjaan'],
            'kewarganegaraan' => $laporan['kewarganegaraan'],
            'alamat' => $laporan['alamat'],
            'telepon' => $laporan['telepon'],
            'tanggal_kejadian' => $laporan['tanggalKejadian'],
            'lokasi_kejadian' => $laporan['lokasiKejadian'],
            'surat_hilang' => $laporan['suratHilang'],
            'foto_ktp' => $fotoKtp,
            'foto_pelapor' => $fotoPelapor,
            'rekomendasi_instansi' => $rekomendasiInstansi,
            'dokumen_tambahan' => $dokumenTambahan,
            'pernyataan_keaslian' => $pernyataanKeaslian,
            'pelapor_id' => auth()->user()->id
        ]);
    }
}
