<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class TransaksiModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'kode_transaksi',
    ];


}
