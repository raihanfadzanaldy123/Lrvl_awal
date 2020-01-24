<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kd_barang')->unique();
            $table->string('nm_barang');
            $table->string('kategori');
            $table->integer('hrg_beli');
            $table->integer('hrg_jual');
            $table->integer('stok_barang');
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
        Schema::dropIfExists('data_barang');
    }
}
