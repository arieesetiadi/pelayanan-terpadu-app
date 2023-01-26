<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLokasiKejadian extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_LOKASI_KEJADIAN';
    protected $table = 'detail_lokasi_kejadian';
    protected $fillable = [
        'ID_LOKASI_KEJADIAN', 'ID_KECAMATAN', 'NAMA_LOKASI_KEJADIAN'
    ];
    public $timestamps = false;
    public $incrementing = false;

    public static function generateID()
    {
        $count = self::count();
        $id = "D" . str_pad(($count + 1), 2, "0", STR_PAD_LEFT);

        return $id;
    }
}
