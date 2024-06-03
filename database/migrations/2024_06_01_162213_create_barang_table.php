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
            $table->id();
            $table->string('nama_barang', 50);
            $table->integer('jumlah_barang');
            $table->integer('harga_barang');
            $table->foreignId('admin_id')->constrained('admin');
            $table->foreignId('pegawai_id')->constrained('pegawai');
            $table->foreignId('satuan_id')->constrained('satuan_barang');
            $table->foreignId('barang_masuk_id')->constrained('barang_masuk');
            $table->foreignId('barang_keluar_id')->constrained('barang_keluar');
            $table->timestamps();
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
