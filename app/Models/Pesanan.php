<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'nama',
        'phone',
        'email',
        'alamat',
        'pesanan',
        'Jumlahpesanan',
        'tanggal_pemesanan',
        'status'
    ];
}
