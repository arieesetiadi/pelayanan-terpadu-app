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
            'detail_lokasi_kejadian' => $laporan['detailLokasiKejadian'],
            'surat_hilang' => $laporan['suratHilang'],
            'foto_ktp' => $fotoKtp,
            'foto_pelapor' => $fotoPelapor,
            'rekomendasi_instansi' => $rekomendasiInstansi,
            'dokumen_tambahan' => $dokumenTambahan,
            'pernyataan_keaslian' => $pernyataanKeaslian,
            'pelapor_id' => auth()->user()->id
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
            'status' => 'draft'
        ]);
    }

    public static function getSKTLK()
    {
        $start = now()->subYear(10)->toDateTimeString();
        $end = now()->toDateTimeString();

        return self::whereBetween('dilaporkan_pada', [$start, $end])->paginate(20);
    }

    public static function searchSKTLK($keyword)
    {
        $keyword = "%$keyword%";
        return self
            ::where('nama_lengkap', 'like', $keyword)
            ->orWhere('kewarganegaraan', 'like', $keyword)
            ->orWhere('alamat', 'like', $keyword)
            ->orWhere('telepon', 'like', $keyword)
            ->orWhere('tanggal_kejadian', 'like', $keyword)
            ->orWhere('lokasi_kejadian', 'like', $keyword)
            ->orWhere('surat_hilang', 'like', $keyword)
            ->paginate(20);
    }
}
