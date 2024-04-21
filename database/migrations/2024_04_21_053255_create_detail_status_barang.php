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
        Schema::create('detail_status_barang', function (Blueprint $table) {
            $table->id('id_detail_status');
            $table->unsignedBigInteger('id_barang')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->string('status_awal');
            $table->string('status_akhir');
            $table->string('approval_status');

            $table->foreign('id_barang')->references('id_barang')->on('detail_barang');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_status_barang');
    }
};
