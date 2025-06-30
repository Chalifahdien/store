<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogStok extends Model
{
    public $timestamps = false;
    protected $fillable = ['produk_id', 'tipe', 'jumlah', 'keterangan', 'tanggal'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
