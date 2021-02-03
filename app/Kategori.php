<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'category';

    protected $fillable = ['id', 'name_category'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id', 'id_category');
    }
}
