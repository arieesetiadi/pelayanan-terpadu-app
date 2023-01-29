<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPSKTLK extends Model
{
    use HasFactory;

    // Properties
    protected $primaryKey = 'ID_RP_SKTLK';
    protected $table = 'r_p_sktlk';
    protected $fillable = [
        'ID_RP_SKTLK',
        'ID_SKTLK',
        'ID_PEGAWAI',
        'TGL_PROSES',
        'TGL_NOTIFIKASI',
        'KETERANGAN',
    ];
    public $timestamps = false;
    public $incrementing = false;
}
