<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_JABATAN';
    protected $table = 'jabatan';
    protected $fillable = [
        'ID_JABATAN', 'NAMA_JABATAN'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
