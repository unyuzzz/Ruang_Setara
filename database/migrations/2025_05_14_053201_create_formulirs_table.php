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
        Schema::create('formulir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor')->nullable();
            $table->string('kontak')->nullable();
            $table->string('terlapor');
            $table->date('tanggal_kejadian');
            $table->text('lokasi');
            $table->text('kronologi');
            $table->string('jenis'); // Simpan sebagai teks gabungan (misal: "Verbal, Fisik")
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan'); // Pastikan nama tabel sesuai
    }
};