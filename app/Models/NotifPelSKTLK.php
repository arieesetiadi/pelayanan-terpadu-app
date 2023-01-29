<?php

namespace App\Models;

use App\Models\Laporan\SKTLK;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifPelSKTLK extends Model
{
    use HasFactory;

    protected $table = 'notif_pel_sktlk';
    protected $fillable = [
        'ID_NOTIFIKASI', 'ID_SKTLK', 'ID_PELAPOR', 'TGL_NOTIF_SKTLK'
    ];
    public $timestamps = false;
    public $incrementing = false;

    // Relationship
    public function notifikasi()
    {
        return $this->belongsTo(Notifikasi::class, 'ID_NOTIFIKASI', 'ID_NOTIFIKASI');
    }

    public function sktlk()
    {
        return $this->belongsTo(SKTLK::class, 'ID_SKTLK', 'ID_SKTLK');
    }

    public function pelapor()
    {
        return $this->belongsTo(Pelapor::class, 'ID_PELAPOR', 'ID_PELAPOR');
    }
}
