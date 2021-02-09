<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkout';
    protected $fillable = ['id', 'id_user', 'id_keranjang', 'nama', 'no_hp', 'email', 'kode_pos', 'keterangan', 'total'];

    public function user()
    {
       return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang', 'id');
    }
}
