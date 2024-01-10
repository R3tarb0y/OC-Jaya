<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->unsignedInteger('id_kategori');
            $table->unsignedInteger('id_po');
            $table->string('nama_barang');
            $table->integer('stok');
            $table->string('satuan');
            $table->integer('tahun');
            $table->date('tanggal');
            $table->string('pic_penerima_gudang');
            $table->string('keterangan');
            $table->string('penerima');
            $table->string('pic_menyerahkan');
            $table->string('pic_penerima');
            $table->string('product_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
