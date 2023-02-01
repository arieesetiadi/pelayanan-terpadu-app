<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notifikasi extends Model
{
    public $primaryKey = 'ID_NOTIFIKASI';
    public $table = 'notifikasi';
    public $timestamps = false;

    protected $guarded = [];

    use HasFactory;

    public static function generateID()
    {
        $count = self::count();
        $id = "N" . str_pad(($count + 1), 2, "0", STR_PAD_LEFT);

        return $id;
    }

    public static function insert($notifikasi)
    {
        return self::create([
            'judul' => $notifikasi['judul'],
            'isi' => $notifikasi['isi'],
            'tipe' => $notifikasi['tipe'],
            'telah_dibaca' => $notifikasi['telah_dibaca'],
            'dikirim_kepada' => $notifikasi['dikirim_kepada'],
            'laporan_id' => $notifikasi['laporan_id'],
            'pelapor_id' => $notifikasi['pelapor_id'] ?? auth()->user()->id,
            'dikirim_pada' => $notifikasi['dikirim_pada'],
        ]);
    }

    public static function getNotifikasiPelapor()
    {
        $data['notifikasi'] =
            self
            ::where([
                ['dikirim_kepada', 'pelapor'],
                ['pelapor_id', auth()->user()->id]
            ])
            ->orderBy('id', 'desc')
            ->get();

        $data['count'] =
            self
            ::where([
                ['dikirim_kepada', 'pelapor'],
                ['pelapor_id', auth()->user()->id],
                ['telah_dibaca', false]
            ])
            ->orderBy('id', 'desc')
            ->count();

        return $data;
    }

    public static function getNotifikasiAdmin()
    {
        $notifikasiSKTLK = NotifPelSKTLK::orderByDesc('TGL_NOTIF')->get();
        $notifikasi = DB::select("SELECT * FROM notif_pel_sktlk UNION SELECT * FROM notif_pel_sik ORDER BY TGL_NOTIF DESC");
        dd($notifikasi);
        // $notifikasiSIK = [];
        // $notifikasiSP2HP = [];

        // $notifikasi = array_merge($notifikasiSKTLK, $notifikasiSIK, $notifikasiSP2HP);
        // $data['notifikasi'] = array_merge($notifikasiSKTLK, $notifikasiSIK, $notifikasiSP2HP);

        $data['notifikasi'] = $notifikasiSKTLK;
        $data['count'] = count($notifikasiSKTLK);

        return $data;
    }
}
