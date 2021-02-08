@extends('lay.lay')
@section('title', 'Keranjang')
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
                <h2>Keranjang</h2>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- slider Area End-->


<!--================Cart Area =================-->
<section class="cart_area section_padding">
<div class="container">
<div class="cart_inner">
<div class="table-responsive">
<table class="table">
<thead>
  <tr>
    <th scope="col">Nama</th>
    <th scope="col">Harga</th>
    <th scope="col">Jumlah</th>
    <th scope="col">Total</th>
  </tr>
</thead>
<tbody>
 

  <tr>
    <td>
      <div class="media">
        <div class="d-flex">
          <img src="{{ url('/storage/'. $produk->image) }}" alt="" />
        </div>
        <div class="media-body">
          <p>{{ $produk->name }}</p>
        </div>
      </div>
    </td>
    <td>
      <h5>Rp.{{ number_format($produk->price) }}</h5>
    </td>
    <td>
    <form action="/produk/pesan/{{ $produk->id }}" method="post">
    @csrf
      <div class="product_count">
          {{-- <span class="input-number-decrement"> <i class="ti-minus"></i></span> --}}
          <input class="input-number" name="jumlah" type="text" value="1" required autocomplete="off">
          {{-- <span class="input-number-increment"> <i class="ti-plus"></i></span> --}}
      </div>
    </td>
    <td>
  <h5></h5>
    </td>
  </tr>


  <tr class="bottom_button">
    <td>
      {{-- <a class="btn_1" href="#">Update Cart</a> --}}
    </td>
    <td></td>
    <td></td>
    <td>
      <div class="cupon_text float-right">
        <button type="submit" class="btn_1">Simpan</button>
      </div>
    </td>
  </tr>
  </form>

  <tr>
    <td></td>
    <td></td>
    <td>
      <h5>Subtotal</h5>
    </td>
    <td>
      <h5>$2160.00</h5>
    </td>
  </tr>

 
</tbody>
</table>
<div class="checkout_btn_inner float-right">
<a class="btn_1" href="#">Kembali Belanja</a>
<a class="btn_1 checkout_btn_1" href="#">Lanjut Checkout</a>
</div>
</div>
</div>
</section>
<!--================End Cart Area =================-->
</div>

@endsection

@section('footer')



