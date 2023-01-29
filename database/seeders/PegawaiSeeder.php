<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // J01 	Kapolres
        // J02 	Wakapolres
        // J03 	Kabag
        // J04 	Kasat
        // J05 	Admin

        // D01 	SPKT
        // D02 	Reskrim
        // D03 	Brimob
        // D04 	Gegana
        // D05 	Intelkam
        // D06 	Resnarkoba
        // D07 	Binmas
        // D08 	Sabhara
        // D09 	Satlantas

        $pegawai = [
            [
                'ID_PEGAWAI' => 'P01',
                'ID_JABATAN' => 'J05',
                'ID_DIVISI' => 'D01',
                'NAMA_PEGAWAI' => 'Admin SPKT',
                'EMAIL_PEGAWAI' => 'apolresbadung@gmail.com',
                'ALAMAT_PEGAWAI' => 'Denpasar',
                'TELEPON_PEGAWAI' => '082146335727',
                'USERNAME_PEGAWAI' => 'apolres',
                'PASSWORD_PEGAWAI' => Hash::make('apolres'),
            ],
            [
                'ID_PEGAWAI' => 'P02',
                'ID_JABATAN' => 'J05',
                'ID_DIVISI' => 'D02',
                'NAMA_PEGAWAI' => 'Admin Reskrim',
                'EMAIL_PEGAWAI' => 'areskrimbadung@gmail.com',
                'ALAMAT_PEGAWAI' => 'Badung',
                'TELEPON_PEGAWAI' => '082146335727',
                'USERNAME_PEGAWAI' => 'areskrim',
                'PASSWORD_PEGAWAI' => Hash::make('areskrim'),
            ],
            [
                'ID_PEGAWAI' => 'P03',
                'ID_JABATAN' => 'J03',
                'ID_DIVISI' => 'D01',
                'NAMA_PEGAWAI' => 'Kanit SPKT',
                'EMAIL_PEGAWAI' => 'kanitspktbadung@gmail.com',
                'ALAMAT_PEGAWAI' => 'Gianyar',
                'TELEPON_PEGAWAI' => '082146335727',
                'USERNAME_PEGAWAI' => 'kanit',
                'PASSWORD_PEGAWAI' => Hash::make('kanit'),
            ]
        ];

        Pegawai::insert($pegawai);
    }
}
