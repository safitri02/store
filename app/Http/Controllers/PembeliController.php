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
        $produk = Produk::find($id);

        if($req->jumlah > $produk->qty){
            //stok tidak cukup
            return redirect('/produk');
        }

        $cek_pesanan = Keranjang::where('id_user', Auth::user()->id)->where('status', 0);

        if(!empty($cek_pesanan)) {
            $keranjang = New Keranjang;
            $keranjang->id_user = auth::user()->id;
            $keranjang->id_produk = $produk->id;
            $keranjang->harga_satuan = $produk->price;
            $keranjang->jumlah = $req->jumlah;
            $keranjang->total = $produk->price * $req->jumlah;
            $keranjang->subtotal = $keranjang->harga_satuan * $keranjang->jumlah;
            $keranjang->status = 0;
            // return $keranjang;
            // die;
            $keranjang->save();
            return redirect('/produk/keranjang');
            }

    }

    public function ker()
    {
        $keranjang = Keranjang::with('produk')->where('status', 0)->get();
        return view('pembeli.keranjangAll', compact('keranjang'));
    }

    public function checkout()
    {
        // $pesan = Keranjang::where('id_user', Auth::user()->id)->where('status', 0);
        $data = Keranjang::with('produk')->where('id_user', Auth::user()->id)->where('status', 0)->get();
        // $jumlah_harga = $data->harga_satuan + $data->total * $data->jumlah;
        return view('pembeli.checkout', compact('data'));
    }

    public function checkoutStore(Request $req)
    {
        // echo "Masuk";
        $data = Keranjang::with('produk')->where('id_user', Auth::user()->id)->where('status', 0)->first();

        $keranjang = Keranjang::with('produk')->where('id_user', Auth::user()->id)->where('status', 0)->update([
            'status' => 1
        ]);

        if(!empty($data)){
            $pesan = new Checkout;
            $pesan->id_user = $data->id_user;
            $pesan->id_keranjang = $data->id;
            $pesan->nama = $req->nama;
            $pesan->alamat = $req->alamat;
            $pesan->no_hp = $req->no_hp;
            $pesan->email = $req->email;
            $pesan->kode_pos = $req->kode_pos;
            $pesan->keterangan = $req->keterangan;
            $pesan->total = $data->jumlah*$data->harga_satuan;

            // return $pesan;
            // die;
            $pesan->save();

            return redirect('/order/konfirmasi');
        }
    }

    public function konfirmasi()
    {
        $order = Checkout::with('keranjang')->where('id_user', Auth::user()->id)->first();
        return view('pembeli.konfirmasi', compact('order'));
    }
}
