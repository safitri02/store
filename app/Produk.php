<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'product';

    protected $fillable = ['id', 'id_category', 'name', 'qty', 'price', 'image'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_category', 'id');
    }
}
