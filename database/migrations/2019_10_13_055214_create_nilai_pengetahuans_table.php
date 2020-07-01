<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiPengetahuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_pengetahuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tugas_1')->nullable();
            $table->integer('tugas_2')->nullable();
            $table->integer('tugas_3')->nullable();
            $table->integer('tugas_4')->nullable();
            $table->integer('kuis_1')->nullable();
            $table->integer('kuis_2')->nullable();
            $table->integer('kuis_3')->nullable();
            $table->integer('pengamatan')->nullable();
            $table->integer('uh')->nullable();
            $table->integer('uh_remedial')->nullable();
            $table->integer('kode_kd');
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
        Schema::dropIfExists('nilai_pengetahuans');
    }
}
