<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
