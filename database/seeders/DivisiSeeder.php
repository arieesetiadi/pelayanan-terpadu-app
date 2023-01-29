<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisi = [
            'SPKT', 'Reskrim', 'Brimob', 'Gegana', 'Intelkam', 'Resnarkoba', 'Binmas', 'Sabhara', 'Satlantas'
        ];

        foreach ($divisi as $i => $div) {
            Divisi::create([
                'ID_DIVISI' => 'D0' . ($i + 1),
                'NAMA_DIVISI' => $div
            ]);
        }
    }
}
