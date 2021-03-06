@extends('lay.lay')
@section('title', 'Checkout')
@section('css')
@section('header')

@section('content')

<div class="container mb-5 mt-5">
<div class="billing_details">
<div class="row">
<div class="col-lg-8">
<h3>Silahkan Isi Alamat Pengiriman</h3>
    <form class="row contact_form" action="/produk/checkout" method="post" novalidate="novalidate">
    @csrf
        <div class="col-md-12 form-group p_star">
        <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" autocomplete="off" autofocus/>
        </div>
        <div class="col-md-12 form-group">
        <textarea class="form-control" name="alamat" rows="1" placeholder="Alamat Lengkap" autocomplete="off" autofocus></textarea>
        </div>
        <div class="col-md-6 form-group p_star">
        <input type="text" placeholder="Nomer Hp" class="form-control" name="no_hp" autocomplete="off" autofocus/>
        </div>
        <div class="col-md-6 form-group p_star">
        <input type="text" placeholder="Email" class="form-control" id="email" name="email" autocomplete="off" autofocus/>
        </div>
        <div class="col-md-12 form-group p_star">
        <input type="text" placeholder="Kode Pos" class="form-control" name="kode_pos" autocomplete="off" autofocus/>
        </div>
        <div class="col-md-12 form-group">
        <textarea class="form-control" name="keterangan" rows="1" autocomplete="off" autofocus placeholder="Pesan untuk penjual"></textarea>
        </div>
  
</div>
<div class="col-lg-4">
<div class="order_box">
<h2>Orderanmu</h2>
    <ul class="list">
    <li>
    <a href="#">Produk
    <span>Harga</span>
    </a>
    </li>
    @foreach ($data as $da)
        <li>
        <a href="#">{{ $da->produk->name }}
        <span class="middle">{{ $da->jumlah }}</span>
        <span class="last">Rp.{{ $da->total }}</span>
        </a>
        </li>
    @endforeach
   
    <li>
    <a href="#">Total
    <span>skdjdk</span>
    </a>
    </li>

    {{-- <li>
    <a href="#">Fresh Brocoli
    <span class="middle">x 02</span>
    <span class="last">$720.00</span>
    </a>
    </li>
    </ul>
    <ul class="list list_2">
    <li>
    <a href="#">Subtotal
    <span>$2160.00</span>
    </a>
    </li>
    <li>
    <a href="#">Shipping
    <span>Flat rate: $50.00</span>
    </a>
    </li>
    <li>
    <a href="#">Total
    <span>$2210.00</span>
    </a>
    </li>
    </ul> --}}
<p class="mt-5">
Pastikan alamat penerima benar, jika ada kesalahan pada alamat kami tidak bertanggung jawab
</p>

<button class="btn_3" type="submit">Checkout Sekarang</button>

  </form>

</div>
</div>
</div>
</div>
</div>

@endsection

@section('footer')



