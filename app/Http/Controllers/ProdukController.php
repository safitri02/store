<?php

namespace App\Http\Controllers;
use App\Produk;
use File;
use App\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        return view('produk.index');
    }

    public function home()
    {
        // echo"Masuk";
        return view('home');
    }

    public function show()
    {
        $produk = Produk::with('kategori')->paginate(10);
        return view('produk.showAll', compact('produk'));
    }

    public function create(Request $req)
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $req)
    {
        // return $req;
        $produk = New Produk;
        $produk->name = $req->name;
        $produk->id_category = $req->name_category;
        $produk->qty = $req->qty;
        $produk->price = $req->price;
        $produk->image = $req->file('image')->store('/asset/gambar', 'public'); //setelah ini kita jalankan php artisan storage::link
        $produk->save();

        return redirect('/show');
    }

    public function destroy($id)
    {
        // return $id;
        $gambar = Produk::where('id', $id)->first();
        if($gambar){
            File::delete(['storage/', '$gambar']);
        }

        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/show');

    }


   
}
