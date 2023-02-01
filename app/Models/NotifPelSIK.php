<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifPelSIK extends Model
{
    use HasFactory;


    protected $table = 'notif_pel_sik';
    protected $fillable = [
        'ID_NOTIFIKASI', 'ID_SIK', 'ID_PELAPOR', 'TIPE_NOTIF', 'TGL_NOTIF'
    ];
    public $timestamps = false;
    public $incrementing = false;

    // Relationship
    public function notifikasi()
    {
        return $this->belongsTo(Notifikasi::class, 'ID_NOTIFIKASI', 'ID_NOTIFIKASI');
    }

    public function sik()
    {
        return $this->belongsTo(SIK::class, 'ID_SIK', 'ID_SIK');
    }

    public function pelapor()
    {
        return $this->belongsTo(Pelapor::class, 'ID_PELAPOR', 'ID_PELAPOR');
    }
}
