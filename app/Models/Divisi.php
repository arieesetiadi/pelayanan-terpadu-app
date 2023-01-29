<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_DIVISI';
    protected $table = 'divisi';
    protected $fillable = [
        'ID_DIVISI', 'NAMA_DIVISI'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
