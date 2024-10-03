<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModels extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_barang';

    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'deskripsi_barang',
        'jumlah_barang',
        'active'
    ];
}
