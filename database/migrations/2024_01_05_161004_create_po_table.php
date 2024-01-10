<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('po', function (Blueprint $table) {
            $table->increments('id_po');
            $table->unsignedInteger('id_kategori');
            $table->string('nama_po');
            $table->string('informasi_po')->nullable();
            $table->integer('no_po');
            $table->integer('stok');
            $table->string('satuan');
            $table->integer('tahun');
            $table->date('tanggal');
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
        Schema::dropIfExists('po');
    }

};
