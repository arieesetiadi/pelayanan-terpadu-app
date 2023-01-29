<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            'Kapolres', 'Wakapolres', 'Kabag', 'Kasat', 'Admin'
        ];

        foreach ($jabatan as $i => $jab) {
            Jabatan::create([
                'ID_JABATAN' => 'J0' . ($i + 1),
                'NAMA_JABATAN' => $jab
            ]);
        }
    }
}
