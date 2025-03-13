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
        Schema::create('data_umkms', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun')->nullable(true);
            $table->foreignId('city_id')->constrained('cities');
            $table->string('nama_pemilik')->nullable(true);
            $table->string('jenis_usaha')->nullable(true);
            $table->string('nama_usaha')->nullable(true);
            $table->longText('alamat_satu')->nullable(true);
            $table->longText('alamat_dua')->nullable(true);
            $table->string('kode_klasifikasi')->nullable(true);
            $table->text('bidang_usaha')->nullable(true);
            $table->text('produk')->nullable(true);
            $table->string('skala_usaha')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_umkms');
    }
};
