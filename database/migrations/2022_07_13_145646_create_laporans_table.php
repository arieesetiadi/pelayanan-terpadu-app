<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('name_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('tanggal_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('surat_hilang');
            $table->string('dokumen_1')->nullable();
            $table->string('dokumen_2')->nullable();
            $table->string('dokumen_3')->nullable();
            $table->string('dokumen_4')->nullable();
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
        Schema::dropIfExists('laporans');
    }
}
