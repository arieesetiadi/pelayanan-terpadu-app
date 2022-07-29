<?php

namespace App\Models\Laporan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIK extends Model
{
    use HasFactory;

    public $table = 'laporan_sik';
    protected $guarded = [];

    public static function insert($laporan)
    {
        // Upload file laporan SIK
        $path = 'assets-user/upload/';

        $proposalKegiatan = uploadFile($laporan['proposalKegiatan'], $path);
        $izinTempat = uploadFile($laporan['izinTempat'], $path);
        $izinInstansi = uploadFile($laporan['izinInstansi'], $path);
        $fotokopiPaspor = uploadFile($laporan['fotokopiPaspor'] ?? null, $path);
        $rekomendasiPolsek = uploadFile($laporan['rekomendasiPolsek'], $path);

        // Insert data laporan ke database
        return self::create([
            'proposal_kegiatan' => $proposalKegiatan,
            'izin_tempat' => $izinTempat,
            'izin_instansi' => $izinInstansi,
            'fotokopi_paspor' => $fotokopiPaspor,
            'rekomendasi_polsek' => $rekomendasiPolsek
        ]);
    }

    public static function insertForm($data)
    {
        self::find($data['id'])->update([
            'nama_organisasi' => $data['namaOrganisasi'],
            'nama_penanggung_jawab' => $data['namaPenanggungJawab'],
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
            'bentuk_kegiatan' => $data['bentukKegiatan'],
            'tanggal_kegiatan' => $data['tanggalKegiatan'],
            'waktu_mulai' => $data['waktuMulai'],
            'waktu_selesai' => $data['waktuSelesai'],
            'lokasi_kegiatan' => $data['lokasiKegiatan'],
            'dalam_rangka' => $data['dalamRangka'],
            'jumlah_undangan' => $data['jumlahUndangan'],
        ]);
    }
}
