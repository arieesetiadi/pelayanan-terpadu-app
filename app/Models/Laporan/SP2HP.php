<?php

namespace App\Models\Laporan;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SP2HP extends Model
{
    use HasFactory;

    public $table = 'laporan_sp2hp';
    public $timestamps = false;

    protected $guarded = [];

    public static function getSP2HP()
    {
        $start = now()->subYear(10)->toDateTimeString();
        $end = now()->toDateTimeString();

        return self::whereBetween('dilaporkan_pada', [$start, $end])->paginate(20);
    }

    public static function searchSP2HP($keyword)
    {
        $keyword = "%$keyword%";

        return self
            ::where('nama_lengkap', 'like', $keyword)
            ->orWhere('kewarganegaraan', 'like', $keyword)
            ->orWhere('alamat', 'like', $keyword)
            ->orWhere('telepon', 'like', $keyword)
            ->orWhere('judul_laporan', 'like', $keyword)
            ->orWhere('isi_laporan', 'like', $keyword)
            ->orWhere('tanggal_kejadian', 'like', $keyword)
            ->orWhere('lokasi_kejadian', 'like', $keyword)
            ->orWhere('detail_lokasi_kejadian', 'like', $keyword)
            ->orWhere('kategori', 'like', $keyword)
            ->orWhere('terlapor', 'like', $keyword)
            ->orWhere('saksi', 'like', $keyword)
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
                    return $query->where('nama_lengkap', 'like', $keyword)
                        ->orWhere('kewarganegaraan', 'like', $keyword)
                        ->orWhere('alamat', 'like', $keyword)
                        ->orWhere('telepon', 'like', $keyword)
                        ->orWhere('judul_laporan', 'like', $keyword)
                        ->orWhere('isi_laporan', 'like', $keyword)
                        ->orWhere('tanggal_kejadian', 'like', $keyword)
                        ->orWhere('lokasi_kejadian', 'like', $keyword)
                        ->orWhere('detail_lokasi_kejadian', 'like', $keyword)
                        ->orWhere('kategori', 'like', $keyword)
                        ->orWhere('terlapor', 'like', $keyword)
                        ->orWhere('saksi', 'like', $keyword);
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
                ->where('lokasi_kejadian', $lokasi)
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
            ->where('lokasi_kejadian', $lokasi)
            ->count();
    }

    public static function countByPeriod($start, $end)
    {
        $start = Carbon::make($start)->firstOfMonth()->toDateString();
        $end = Carbon::make($end)->lastOfMonth()->toDateString();

        return self
            ::whereDate('dilaporkan_pada', '>=', $start)
            ->whereDate('dilaporkan_pada', '<=', $end)
            ->count();
    }
}
