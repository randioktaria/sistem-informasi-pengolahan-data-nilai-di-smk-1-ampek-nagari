<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKeterampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_keterampilans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('praktik_1')->nullable();
            $table->integer('praktik_2')->nullable();
            $table->integer('praktik_3')->nullable();
            $table->integer('praktik_4')->nullable();
            $table->integer('praktik_5')->nullable();
            $table->integer('produk')->nullable();
            $table->integer('proyek')->nullable();
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
        Schema::dropIfExists('nilai_keterampilans');
    }
}
