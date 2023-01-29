<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\DJ;
use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class DJSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();

        foreach ($jabatan as $j) {
            foreach ($divisi as $d) {
                DJ::create([
                    'ID_JABATAN' => $j->ID_JABATAN,
                    'ID_DIVISI' => $d->ID_DIVISI
                ]);
            }
        }
    }
}
