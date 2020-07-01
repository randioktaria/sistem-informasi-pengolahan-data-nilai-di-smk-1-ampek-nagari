<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaianKaraktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_karakters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kemandirian');
            $table->string('inisiatif');
            $table->string('kerjasama');
            $table->string('tang_jawab');
            $table->string('kejujuran');
            $table->string('gemar_membaca');
            $table->string('menghargai');
            $table->string('komunikatif');
            $table->string('kepemimpinan');
            $table->text('ket');
            $table->string('nis');
            $table->string('kode_mapel');
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
        Schema::dropIfExists('penilaian_karakters');
    }
}
