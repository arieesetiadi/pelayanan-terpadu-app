<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifPelSktlkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NOTIF_PEL_SKTLK', function (Blueprint $table) {
            $table->char('ID_NOTIFIKASI', 3);
            $table->char('ID_SKTLK', 3);
            $table->char('ID_PELAPOR', 3);
            $table->dateTime('TGL_NOTIF_SKTLK');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notif_pel_sktlk');
    }
}
