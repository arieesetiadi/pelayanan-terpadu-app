<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pelapor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Properties
    protected $primaryKey = 'ID_PELAPOR';
    protected $table = 'pelapor';
    protected $guard = 'pelapor';
    protected $hidden = ['PASSWORD_PELAPOR'];
    protected $fillable = [
        'ID_PELAPOR',
        'NAMA_LENGKAP',
        'TEMPAT_LAHIR',
        'TANGGAL_LAHIR',
        'TELEPON_PELAPOR',
        'JENIS_KELAMIN',
        'ALAMAT_PELAPOR',
        'USERNAME_PELAPOR',
        'PASSWORD_PELAPOR',
        'EMAIL_PELAPOR',
        'STATUS_PELAPOR'
    ];
    public $timestamps = false;
    public $incrementing = false;

    // Relationship
    // ...
    // ...

    // Methods
    public static function generateID()
    {
        $count = self::count();
        $id = "P" . str_pad(($count + 1), 2, "0", STR_PAD_LEFT);

        return $id;
    }
}
