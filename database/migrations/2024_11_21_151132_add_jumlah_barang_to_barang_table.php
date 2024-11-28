<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('barang', function (Blueprint $table) {
            if (!Schema::hasColumn('barang', 'jumlah_barang')) {
                $table->integer('jumlah_barang')->default(0); // Menambahkan kolom stok barang jika belum ada
            }
        });
    }

    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            if (Schema::hasColumn('barang', 'jumlah_barang')) {
                $table->dropColumn('jumlah_barang'); // Menghapus kolom jika ada
            }
        });
    }
};
