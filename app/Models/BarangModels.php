<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModels extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'barang';

    protected $fillable = [
        'kode_barang',
=======
    protected $primaryKey = 'kode_barang';

    protected $table = 'barang';

    protected $fillable = [
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        'nama_barang',
        'deskripsi_barang',
        'jumlah_barang',
        'active'
    ];
}
