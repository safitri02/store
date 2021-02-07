@extends('lay.lay')
@section('title', 'Estrore')
@section('css')
@section('header')

@section('content')

<div class="container">

<div class="row mt-5 mb-5">
    <div class="col-md-6">
    <div class="produkimg">
         <img src="{{ url('/storage/' .$produk->image) }}">
    </div>
    {{-- <div class="keterangan">
    <h3> {{ $produk->name }}</h3>
    </div> --}}
    </div>
    <div class="col-md-6">
        <h2 class="mb-3">Detail {{ $produk->name }}</h2>
        <h5>Nama Produk : {{ $produk->name }}</h5>
        <h5>Kategori : {{ $produk->kategori->name_category }}</h5>
        <h5>Jumlah Produk : {{ $produk->qty }}</h5>
        <h5>Harga Produk : Rp.{{ number_format($produk->price) }}</h5>
        <h5 class="mb-5">Keterangan Produk : {{ $produk->keterangan }}</h5>

        <a href="/produk" class="btn btn-primary mb-3 mt-3">Kembali</a> <br>
        <a href="/cart" class="btn btn-primary">Masukkan Keranjang</a>

    </div>
</div>

</div>

@endsection

@section('footer')



