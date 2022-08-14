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
            'rekomendasi_polsek' => $rekomendasiPolsek,
            'pelapor_id' => auth()->user()->id
        ]);
    }

    public static function updateDokumen($laporan)
    {
        // Upload file laporan SIK
        $id = $laporan['laporan_id'];
        $path = 'assets-user/upload/';

        $proposalKegiatan = uploadFile($laporan['proposalKegiatan'] ?? null, $path);
        $izinTempat = uploadFile($laporan['izinTempat'] ?? null, $path);
        $izinInstansi = uploadFile($laporan['izinInstansi'] ?? null, $path);
        $fotokopiPaspor = uploadFile($laporan['fotokopiPaspor'] ?? null, $path);
        $rekomendasiPolsek = uploadFile($laporan['rekomendasiPolsek'] ?? null, $path);

        // Insert data laporan ke database
        $laporanSIK = self::find($id);
        if ($proposalKegiatan != '') {
            $laporanSIK->update([
                'proposal_kegiatan' => $proposalKegiatan,
            ]);
        }
        if ($izinTempat != '') {
            $laporanSIK->update([
                'izin_tempat' => $izinTempat,
            ]);
        }
        if ($izinInstansi != '') {
            $laporanSIK->update([
                'izin_instansi' => $izinInstansi,
            ]);
        }
        if ($fotokopiPaspor != '') {
            $laporanSIK->update([
                'fotokopi_paspor' => $fotokopiPaspor,
            ]);
        }
        if ($rekomendasiPolsek != '') {
            $laporanSIK->update([
                'rekomendasi_polsek' => $rekomendasiPolsek,
            ]);
        }

        $laporanSIK->update([
            'keterangan' => null,
            'status' => null
        ]);
    }

    public static function insertForm($data)
    {
        // Upload file pernyataan keaslian
        $path = 'assets-user/upload/';
        $pernyataanKeaslian = uploadFile($data['pernyataanKeaslian'], $path);

        return self::find($data['id'])->update([
            'nama_organisasi' => $data['namaOrganisasi'],
            'nama_penanggung_jawab' => $data['namaPenanggungJawab'],
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
            'bentuk_kegiatan' => $data['bentukKegiatan'],
            'tanggal_kegiatan' => $data['tanggalKegiatan'],
            'waktu_mulai' => $data['waktuMulai'],
            'waktu_selesai' => $data['waktuSelesai'],
            'lokasi_kegiatan' => $data['lokasiKegiatan'],
            'dalam_rangka' => $data['dalamRangka'],
            'jumlah_undangan' => $data['jumlahUndangan'],
            'pernyataan_keaslian' => $pernyataanKeaslian
        ]);
    }

    public static function insertDraft($data)
    {
        return self::find($data['id'])->update([
            'nama_organisasi' => $data['namaOrganisasi'],
            'nama_penanggung_jawab' => $data['namaPenanggungJawab'],
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
            'bentuk_kegiatan' => $data['bentukKegiatan'],
            'tanggal_kegiatan' => $data['tanggalKegiatan'],
            'waktu_mulai' => $data['waktuMulai'],
            'waktu_selesai' => $data['waktuSelesai'],
            'lokasi_kegiatan' => $data['lokasiKegiatan'],
            'dalam_rangka' => $data['dalamRangka'],
            'jumlah_undangan' => $data['jumlahUndangan'],
            'status_pernyataan' => 'draft'
        ]);
    }
}
