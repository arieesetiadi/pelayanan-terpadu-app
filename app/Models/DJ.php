<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DJ extends Model
{
    use HasFactory;

    protected $table = 'D_J';
    protected $fillable = [
        'ID_JABATAN', 'ID_DIVISI'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
