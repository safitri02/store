<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Keranjang;
use App\Checkout;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
    
        $produk = Produk::paginate(12);
        return view('pembeli.index', compact('produk'));
    }

    public function detail($id)
    {
        $produk = Produk::with('kategori')->findOrFail($id);
        return view('pembeli.product_detail', compact('produk'));
    }

    public function keranjang($id)
    {
        $produk = Produk::find($id);
        // dd($produk);
       return view('pembeli.keranjang', compact('produk'));
    }

    public function pesan(Request $req, $id)
    {
        $produk = Produk::where('id', $id)->first();
        $id_user = Auth::User()->where('id', $id);
        // return $id_user;
        // die;

        $keranjang = New Keranjang;
        $keranjang->id_user = $id_user;
        $keranjang->id_produk = $produk;
        $keranjang->harga_satuan = $produk->price;
        $keranjang->jumlah = $req->jumlah;
        $keranjang->total = $produk->price * $req->jumlah;
        $keranjang->subtotal = $keranjang->harga_satuan * $keranjang->jumlah;
        $keranjang->status = 0;
        // return $keranjang;
        // die;
        $keranjang->save();

        return back();
        
    }
}
