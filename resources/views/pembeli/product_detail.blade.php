@extends('lay.lay')
@section('title', 'Estrore')
@section('css')
@section('header')

@section('content')

<div class="container">

<!-- slider Area Start-->
<div class="slider-area ">
<!-- Mobile Menu -->
<div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ url('../assets/img/hero/category.jpg') }}">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="hero-cap text-center">
                <h2>Detail Produk {{ $produk->name }}</h2>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- slider Area End-->

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
        <a href="/produk/keranjang/{{ $produk->id }}" class="btn btn-primary">Masukkan Keranjang</a>

    </div>
</div>

</div>

@endsection

@section('footer')



