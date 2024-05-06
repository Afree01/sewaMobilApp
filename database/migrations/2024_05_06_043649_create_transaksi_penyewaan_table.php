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
        Schema::create('transaksi_penyewaan', function (Blueprint $table) {
            $table->id();
            $table->foreign('nomor_plat')->references('nomor_plat')->on('master_mobil');
            $table->string('nomor_plat');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->decimal('total_tarif', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penyewaan');
    }
};
