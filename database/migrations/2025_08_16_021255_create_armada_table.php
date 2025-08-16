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
        Schema::create('armada', function (Blueprint $table) {
            $table->bigInteger('nomor_armada')->primary();
            $table->string('ketersediaan', length: 20)->nullable();
            $table->integer('kapasitas_muatan');
            $table->string('longitude', length: 50)->nullable();
            $table->string('latitude', length: 50)->nullable();
            $table->bigInteger('id_jenis_kendaraan');
            $table->foreign('id_jenis_kendaraan')->references('id_jenis_kendaraan')->on('jenis_kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armada');
    }
};
