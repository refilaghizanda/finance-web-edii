<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasbesar extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_bukti',
        'tanggal',
        'kategori',
        'keterangan',
        'saldo_awal',
        'nominal_transaksi',
        'sisa_saldo',
    ];
}
