<?php

namespace App\Models\Laporan;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SIK extends Model
{
    use HasFactory;

    public $table = 'laporan_sik';
    protected $guarded = [];

    public $timestamps = false;

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
        $fotoKtp = uploadFile($data['fotoKtp'], $path);
        $fotoPelapor = uploadFile($data['fotoPelapor'], $path);

        return self::find($data['id'])->update([
            'nama_organisasi' => $data['namaOrganisasi'],
            'nama_penanggung_jawab' => $data['namaPenanggungJawab'],
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
            'bentuk_kegiatan' => $data['bentukKegiatan'],
            'waktu_mulai' => $data['waktuMulai'],
            'waktu_selesai' => $data['waktuSelesai'],
            'lokasi_kegiatan' => $data['lokasiKegiatan'],
            'detail_lokasi_kegiatan' => $data['detailLokasiKegiatan'],
            'dalam_rangka' => $data['dalamRangka'],
            'jumlah_undangan' => $data['jumlahUndangan'],
            'foto_ktp' => $fotoKtp,
            'foto_pelapor' => $fotoPelapor,
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
            // 'tanggal_kegiatan' => $data['tanggalKegiatan'],
            'waktu_mulai' => $data['waktuMulai'],
            'waktu_selesai' => $data['waktuSelesai'],
            'lokasi_kegiatan' => $data['lokasiKegiatan'],
            'detail_lokasi_kegiatan' => $data['detailLokasiKegiatan'],
            'dalam_rangka' => $data['dalamRangka'],
            'jumlah_undangan' => $data['jumlahUndangan'],
            'status_pernyataan' => 'draft'
        ]);
    }

    public static function getSIK()
    {
        $start = now()->subYear(10)->toDateTimeString();
        $end = now()->toDateTimeString();

        return self::whereBetween('dilaporkan_pada', [$start, $end])->paginate(20);
    }

    public static function searchSIK($keyword)
    {
        $keyword = "%$keyword%";
        return self
            ::where('nama_organisasi', 'like', $keyword)
            ->orWhere('nama_penanggung_jawab', 'like', $keyword)
            ->orWhere('alamat', 'like', $keyword)
            ->orWhere('telepon', 'like', $keyword)
            ->orWhere('bentuk_kegiatan', 'like', $keyword)
            ->orWhere('waktu_mulai', 'like', $keyword)
            ->orWhere('waktu_selesai', 'like', $keyword)
            ->orWhere('lokasi_kegiatan', 'like', $keyword)
            ->orWhere('dalam_rangka', 'like', $keyword)
            ->orWhere('jumlah_undangan', 'like', $keyword)
            ->paginate(20);
    }

    public static function getFilteredByDate($start, $end, $keyword)
    {
        $keyword = "%$keyword%";
        $start = Carbon::make($start)->toDateString();
        $end = Carbon::make($end)->toDateString();

        if ($keyword != "") {
            return self
                ::whereDate('dilaporkan_pada', '>=', $start)
                ->whereDate('dilaporkan_pada', '<=', $end)
                ->where(function ($query) use ($keyword) {
                    return $query->where('nama_organisasi', 'like', $keyword)
                        ->orWhere('nama_penanggung_jawab', 'like', $keyword)
                        ->orWhere('alamat', 'like', $keyword)
                        ->orWhere('telepon', 'like', $keyword)
                        ->orWhere('bentuk_kegiatan', 'like', $keyword)
                        ->orWhere('waktu_mulai', 'like', $keyword)
                        ->orWhere('waktu_selesai', 'like', $keyword)
                        ->orWhere('lokasi_kegiatan', 'like', $keyword)
                        ->orWhere('dalam_rangka', 'like', $keyword)
                        ->orWhere('jumlah_undangan', 'like', $keyword);
                })
                ->paginate(20);
        } else {
            return self::whereDate('dilaporkan_pada', '>=', $start)
                ->whereDate('dilaporkan_pada', '<=', $end)
                ->paginate(20);
        }
    }

    public static function getByPeriod($start, $end)
    {
        $data = [];

        foreach (getLokasi() as $lokasi) {
            $data[$lokasi] = self
                ::whereDate('dilaporkan_pada', '>=', $start)
                ->whereDate('dilaporkan_pada', '<=', $end)
                ->where('lokasi_kegiatan', $lokasi)
                ->count();
        }

        return $data;
    }

    public static function countPerLokasi($lokasi, $start, $end)
    {
        $start = Carbon::make('01-' . $start)->firstOfMonth()->toDateString();
        $end = Carbon::make('01-' . $end)->lastOfMonth()->toDateString();

        return self
            ::whereDate('dilaporkan_pada', '>=', $start)
            ->whereDate('dilaporkan_pada', '<=', $end)
            ->where('lokasi_kegiatan', $lokasi)
            ->count();
    }

    public static function countByPeriod($start, $end)
    {
        $start = Carbon::make($start)->firstOfMonth()->toDateString();
        $end = Carbon::make($end)->lastOfMonth()->toDateString();

        return self
            ::whereDate('dilaporkan_pada', '>=', $start)
            ->whereDate('dilaporkan_pada', '<=', $end)
            ->where('lokasi_kegiatan', '!=', null)
            ->count();
    }
}
