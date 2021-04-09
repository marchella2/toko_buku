<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('noisbn');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('tahun');
            $table->integer('stok');
            $table->integer('harga_pokok');
            $table->integer('harga_jual');
            $table->integer('ppn');
            $table->integer('diskon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_buku');
    }
}