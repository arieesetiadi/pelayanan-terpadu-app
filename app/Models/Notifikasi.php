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
            'dikirim_pada' => $notifikasi['dikirim_pada'],
        ]);
    }

    public static function getNotifikasiPelapor()
    {
        return self
            ::where([
                ['dikirim_kepada', 'pelapor'],
                ['pelapor_id', session('pelapor')->id]
            ])
            ->limit(4)
            ->get();
    }
}
