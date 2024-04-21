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
        Schema::create('detail_distribusi_barang', function (Blueprint $table) {
            $table->id('id_distribusi');
            $table->unsignedBigInteger('NUP')->index();
            $table->unsignedBigInteger('id_ruang')->index();
            $table->unsignedBigInteger('id_detail_status')->index();

            $table->foreign('NUP')->references('NUP')->on('detail_barang');
            $table->foreign('id_ruang')->references('id_ruang')->on('ruang');
            $table->foreign('id_detail_status')->references('id_detail_status')->on('detail_status_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_distribusi_barang');
    }
};
