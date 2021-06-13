<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'tbl_penjualan';
    protected $fillable = [
        'id_penjualan',
        'id_buku',
        'id_kasir',
        'jumlah_beli',
        'bayar',
        'kembalian',
        'total_harga',
        'tanggal',
    ];
}
