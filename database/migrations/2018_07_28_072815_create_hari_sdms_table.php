<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHariSdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hari_sdms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hari_kerja');
            $table->integer('id_sdm');
            $table->integer('kehadiran');
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
        Schema::dropIfExists('hari_sdms');
    }
}
