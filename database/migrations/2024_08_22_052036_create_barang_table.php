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
<<<<<<< HEAD
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('deskripsi_barang');
            $table->integer('jumlah_barang');
            $table->boolean('active')->default(1);
=======
            $table->id('kode_barang')->primary();
            $table->string('nama_barang');
            $table->string('deskripsi_barang');
            $table->integer('jumlah_barang');
            $table->boolean('active')->default(0);
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
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
