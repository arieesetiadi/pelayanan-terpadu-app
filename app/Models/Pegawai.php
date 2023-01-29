<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_PEGAWAI';
    protected $table = 'pegawai';
    protected $fillable = [
        'ID_PEGAWAI',
        'ID_JABATAN',
        'ID_DIVISI',
        'NAMA_PEGAWAI',
        'EMAIL_PEGAWAI',
        'ALAMAT_PEGAWAI',
        'TELEPON_PEGAWAI',
        'USERNAME_PEGAWAI',
        'PASSWORD_PEGAWAI'
    ];
    public $timestamps = false;
    public $incrementing = false;

    // Relationship
    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, 'ID_JABATAN', 'ID_JABATAN');
    }

    public function divisi()
    {
        return $this->hasOne(Divisi::class, 'ID_DIVISI', 'ID_DIVISI');
    }
}
