<?php

namespace Database\Seeders;

use App\Console\Kernel;
use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kecamatan::truncate();
        $kecamatan = [
            'Abiansemal',
            'Kuta',
            'Kuta Selatan',
            'Kuta Utara',
            'Mengwi',
            'Petang'
        ];

        foreach ($kecamatan as $i => $kec) {
            Kecamatan::create([
                'ID_KECAMATAN' => 'K0' . ($i + 1),
                'NAMA_KECAMATAN' => $kec
            ]);
        }
    }
}
