<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
    
        $produk = Produk::paginate(12);
        return view('pembeli.index', compact('produk'));
    }
}
