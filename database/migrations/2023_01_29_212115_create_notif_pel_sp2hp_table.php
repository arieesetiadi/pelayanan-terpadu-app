<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifPelSp2hpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NOTIF_PEL_SP2HP', function (Blueprint $table) {
            $table->char('ID_NOTIFIKASI', 3);
            $table->char('ID_SP2HP', 3);
            $table->char('ID_PELAPOR', 3);
            $table->dateTime('TGL_NOTIF_SP2HP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notif_pel_sp2hp');
    }
}
