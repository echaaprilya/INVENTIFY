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
            $table->id('id_barang');
            $table->unsignedBigInteger('id_category')->index();
            $table->unsignedBigInteger('id_supplier')->index();
            $table->string('nama_barang');
            $table->string('merk_barang');
            $table->string('spesifikasi_barang');
            $table->string('satuan_barang');
            $table->integer('stok_awal');
            $table->integer('stok_masuk');
            $table->integer('stok_keluar');
            $table->integer('stok_akhir');
            $table->date('tanggal_diterima');

            $table->foreign('id_category')->references('id_category')->on('category');
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier');
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
