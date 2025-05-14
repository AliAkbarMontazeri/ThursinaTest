<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategori_pakets', function (Blueprint $table) {
            $table->id();// ID Paket
            $table->string('nama_paket', 100);
            $table->date('tanggal_diterima');
            $table->foreignId('kategori_paket_id')->constrained('kategori_pakets')->onDelete('cascade');
            $table->string('santri_nis', 100);
            $table->foreign('santri_nis')->references('nis')->on('santris')->onDelete('cascade');
            $table->string('pengirim_paket', 100);
            $table->string('isi_disita', 200)->nullable();
            $table->string('status', 50); // Diambil / Belum Diambil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_pakets');
    }
};
