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

    public static function getSP2HP()
    {
        $start = now()->subYear(10)->toDateTimeString();
        $end = now()->toDateTimeString();

        return self::whereBetween('dilaporkan_pada', [$start, $end])->paginate(20);
    }
}
