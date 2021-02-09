<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{

    protected $table = 'keranjang';

    protected $fillable = ['id','id_user', 'id_produk', 'harga_satuan', 'jumlah', 'total', 'subtotal', 'status'];


    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
