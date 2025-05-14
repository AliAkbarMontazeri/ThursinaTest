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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket', 100);
            $table->date('tanggal_diterima');
            $table->foreignId('kategori_paket_id')->constrained('kategori_pakets')->onDelete('cascade');
            $table->string('santri_nis', 100); // sama persis dengan tipe & panjang di santris
            $table->foreign('santri_nis')->references('nis')->on('santris')->onDelete('cascade');
            $table->string('asrama', 100);
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
        Schema::dropIfExists('pakets');
    }
};
