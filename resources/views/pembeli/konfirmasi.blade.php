@extends('lay.lay')
@section('title', 'Konfirmasi Order')
@section('css')
@section('header')

@section('content')

<div class="container mt-5 mb-5">

<!-- slider Area Start-->
<div class="slider-area ">
<!-- Mobile Menu -->
<div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ url('../assets/img/hero/category.jpg') }}">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="hero-cap text-center">
                <h2>Konfirmasi Order</h2>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- slider Area End-->

<!--================ confirmation part start =================-->
<section class="confirmation_part section_padding">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="confirmation_tittle">
<span>Terima kasih. pesanan Anda telah diterima.</span>
</div>
</div>
<div class="col-lg-6 col-lx-4">
<div class="single_confirmation_details">
<h4>Order info</h4>
<ul>
<li>
<p>Nama</p><span>: {{ $order->nama }}</span>
</li>
<li>
<p>No Telepon</p><span>: {{ $order->no_hp }}</span>
</li>
<li>
<p>total</p><span>: USD 2210</span>
</li>
{{-- <li>
<p>mayment methord</p><span>: Check payments</span>
</li> --}}
</ul>
</div>
</div>
<div class="col-lg-6 col-lx-4">
<div class="single_confirmation_details">
<h4>Alamat Pengiriman</h4>
<ul>
<li>
<p>Nama</p><span>: {{ $order->nama }}</span>
</li>
<li>
<p>Alamat</p><span>: {{ $order->alamat }}</span>
</li>
<li>
<p>No Ho</p><span>:{{ $order->no_hp }}</span>
</li>
<li>
<p>Kode Pos</p><span>: {{ $order->kode_pos }}</span>
</li>
</ul>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="order_details_iner">
<h3>Order Detail</h3>
<table class="table table-borderless">
<thead>
<tr>
<th scope="col" colspan="2">Produk</th>
<th scope="col">Jumlah Barang</th>
<th scope="col">Harga Satuan</th>
<th scope="col">Total</th>
</tr>
</thead>
<tbody>
@foreach($data as $order)
<tr>
<th colspan="2"><span>{{ $order->keranjang->produk->name }}</span></th>
<th>{{ $order->keranjang->jumlah }}</th>
<th> <span>Rp.{{ number_format($order->keranjang->harga_satuan) }}</span></th>
<th> <span>Rp.{{ number_format($order->keranjang->total) }}</span></th>
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
<th scope="col" colspan="3">Quantity</th>
<th scope="col">Total</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
    <div class="cupon_text float-right">
        <a href="/produk/order/sukses" class="btn_1 mt-5">Selesai</a>
    </div>
</section>
<!--================ confirmation part end =================-->
</div>

@endsection

@section('footer')



