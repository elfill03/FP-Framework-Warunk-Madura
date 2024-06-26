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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 50);
            $table->date('tanggal');
            $table->integer('jumlah_barang');
            $table->integer('harga_barang');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('satuan_id')->constrained('satuan_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
