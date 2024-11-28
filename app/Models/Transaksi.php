<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = [
        'searchUID',
        'searchNama',
        'searchStatus',
        'barang1',
        'jumlah1',
        'barang2',
        'jumlah2',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];
}
