<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    public $table = 'notifikasi';
    public $timestamps = false;

    protected $guarded = [];

    use HasFactory;

    public static function insert($notifikasi)
    {
        self::create([
            'judul' => $notifikasi['judul'],
            'isi' => $notifikasi['isi'],
            'tipe' => $notifikasi['tipe'],
            'telah_dibaca' => $notifikasi['telah_dibaca'],
            'dikirim_kepada' => $notifikasi['dikirim_kepada'],
            'laporan_id' => $notifikasi['laporan_id'],
            'pelapor_id' => $notifikasi['pelapor_id'] ?? session('pelapor')->id,
            'dikirim_pada' => $notifikasi['dikirim_pada'],
        ]);
    }

    public static function getNotifikasiPelapor()
    {
        $data['notifikasi'] =
            self
            ::where([
                ['dikirim_kepada', 'pelapor'],
                ['pelapor_id', session('pelapor')->id]
            ])
            ->orderBy('id', 'desc')
            ->get();

        $data['count'] =
            self
            ::where([
                ['dikirim_kepada', 'pelapor'],
                ['pelapor_id', session('pelapor')->id],
                ['telah_dibaca', false]
            ])
            ->orderBy('id', 'desc')
            ->count();

        return $data;
    }

    public static function getNotifikasiAdmin()
    {
        $data['notifikasi'] =
            self
            ::where([
                ['dikirim_kepada', 'admin'],
            ])
            ->orderBy('id', 'desc')
            ->get();

        $data['count'] =
            self
            ::where([
                ['dikirim_kepada', 'admin'],
                ['telah_dibaca', false]
            ])
            ->count();

        return $data;
    }
}
