<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'tanggal', 'total_harga', 'nama_pembeli',
        'metode_bayar', 'user_id', 'status_pesanan',
        'midtrans_order_id', 'midtrans_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
    }
}
