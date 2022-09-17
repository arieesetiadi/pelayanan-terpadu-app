<?php

namespace App\Models\Laporan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SP2HP extends Model
{
    use HasFactory;

    public $table = 'laporan_sp2hp';
    public $timestamps = false;

    protected $guarded = [];
}
