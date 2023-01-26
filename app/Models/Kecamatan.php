<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_KECAMATAN';
    protected $table = 'Kecamatan';
    protected $fillable = [
        'ID_KECAMATAN', 'NAMA_KECAMATAN'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
