<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanSikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_sik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_organisasi')->nullable();
            $table->string('nama_penanggung_jawab')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('bentuk_kegiatan')->nullable();
            $table->date('tanggal_kegiatan')->nullable();
            $table->time('waktu_mulai')->nullable();
            $table->time('waktu_selesai')->nullable();
            $table->string('lokasi_kegiatan')->nullable();
            $table->string('dalam_rangka')->nullable();
            $table->integer('jumlah_undangan')->nullable();
            $table->boolean('status')->nullable();

            $table->string('proposal_kegiatan');
            $table->string('izin_tempat');
            $table->string('izin_instansi');
            $table->string('fotocopi_paspor')->nullable();
            $table->string('rekomendasi_polsek');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_sik');
    }
}
