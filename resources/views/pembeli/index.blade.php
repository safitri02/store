@extends('lay.lay')
@section('title', 'Estrore')
@section('css')
@section('header')

@section('content')

<main>

<!-- slider Area Start-->
<div class="slider-area ">
<!-- Mobile Menu -->
<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="hero-cap text-center">
                <h2>All Product</h2>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- slider Area End-->

<!-- Latest Products Start -->
<section class="latest-product-area latest-padding">
<div class="container">
<div class="row product-btn d-flex justify-content-between">
        <div class="properties__button">
            <!--Nav Button  -->
            <nav>                                                                                                
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                </div>
            </nav>
            <!--End Nav Button  -->
        </div>
        <div class="select-this d-flex">
            <div class="featured">
                <span>Short by: </span>
            </div>
            <form action="#">
                <div class="select-itms">
                    <select name="select" id="select1">
                        <option value="">Featured</option>
                        <option value="">Featured A</option>
                        <option value="">Featured B</option>
                        <option value="">Featured C</option>
                    </select>
                </div>
            </form>
        </div>
</div>
<!-- Nav Card -->

<main>
<div class="container mb-5">
<div class="tab-content" id="nav-tabContent">
    <!-- card one -->
        <div class="col-lg-12">
            <div class="section-tittle text-center mb-85 mt-5">
                <h2>All Product</h2>
            </div>
        </div>
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
        @foreach ($produk as $p)
              
       <div class="col-md-3">
       <div class="produk">
       <div class="card">
        <img src="{{ url('/storage/' .$p->image) }}">
        <div class="card-body">
            <a href="/detail/product/{{ $p->id }}"><h5 class="card-title">{{ $p->name }}</h5></a>
        </div>
        </div>
        </div>
       </div>

        @endforeach
        <div class="col-md-12 mt-5 mb-3 text-center justify-content-center">{{ $produk->links() }}</div>
            
        </div>
    </div>
</div>
</main>

@endsection

@section('footer')



