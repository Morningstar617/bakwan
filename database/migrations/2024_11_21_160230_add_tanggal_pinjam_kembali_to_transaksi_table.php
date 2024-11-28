<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggalPinjamKembaliToTransaksiTable extends Migration
{
    public function up()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->date('tanggal_pinjam')->nullable()->after('jumlah2');
            $table->date('tanggal_kembali')->nullable()->after('tanggal_pinjam');
        });
    }

    public function down()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropColumn(['tanggal_pinjam', 'tanggal_kembali']);
        });
    }
}
