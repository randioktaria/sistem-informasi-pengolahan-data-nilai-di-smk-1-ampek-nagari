<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_ujians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uts')->nullable();
            $table->integer('uas')->nullable();
            $table->string('ket');
            $table->string('nis');
            $table->string('kode_mapel');
            $table->integer('kode_ta');
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
        Schema::dropIfExists('nilai_ujians');
    }
}
