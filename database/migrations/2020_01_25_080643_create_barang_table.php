<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('id_kategori');
             $table->string('nama_barang');
             $table->integer('harga');
             $table->string('foto1');
             $table->string('foto2');
             $table->string('foto3');
             $table->string('foto4');
             $table->string('keterangan');
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
        Schema::dropIfExists('barang');
    }
}
