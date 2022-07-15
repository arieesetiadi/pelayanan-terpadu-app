<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanSktlkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_sktlk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('tanggal_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('surat_hilang');
            $table->string('foto_ktp');
            $table->string('foto_pelapor');
            $table->string('rekomendasi_instansi');
            $table->string('dokumen_tambahan')->nullable();
            $table->foreignId('pelapor_id');
            $table->timestamp('diunggah_pada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_sktlk');
    }
}
