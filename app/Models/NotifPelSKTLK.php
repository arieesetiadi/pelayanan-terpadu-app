<?php

namespace App\Models;

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
}
