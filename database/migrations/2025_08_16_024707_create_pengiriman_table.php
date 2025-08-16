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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->bigInteger('nomor_pengiriman')->primary()->autoIncrement();
            $table->date('tanggal_pengiriman');
            $table->string('lokasi_asal', length: 100);
            $table->string('lokasi_tujuan', length: 100);
            $table->string('status_pengiriman', length: 20)->nullable();
            $table->bigInteger('nomor_armada')->nullable();
            $table->foreign('nomor_armada')->references('nomor_armada')->on('armada')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
