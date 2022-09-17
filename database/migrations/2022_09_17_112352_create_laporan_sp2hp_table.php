<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanSp2hpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_sp2hp', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->date('tanggal_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('detail_lokasi_kejadian');
            $table->string('lampiran');
            $table->foreignId('pelapor_id');
            $table->timestamp('dilaporkan_pada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_sp2hp');
    }
}
