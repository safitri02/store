@extends('lay.temp')
@section('title', 'Halaman Penjual')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Tambah Data Produk</h4>
    <form class="forms-sample" method="post" action="/add_product" enctype="multipart/form-data"> 
    @csrf
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="name" placeholder="Name Product">
        </div>

        <div class="form-group">
        <label for="name">Kategori</label>
        <select class="form-control" name="name_category">
        @foreach($kategori as $kat)
        <option value="{{ $kat->id }}">{{ $kat->name_category }}</option>
        @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="name">Quantity</label>
        <input type="number" autofocus autocomplete="off" class="form-control" name="qty" placeholder="Quantity Product">
        </div>
        <div class="form-group">
        <label for="name">Price</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="price" placeholder="Price Product">
        </div>
        <div class="form-group">
        <label for="name">Image</label>
        <input type="file" accept="image/*" autofocus autocomplete="off" class="form-control" name="image" placeholder="Image Product">
        </div>
       
        <button type="submit" class="btn btn-success float-right">Tambah</button>
        <button class="btn btn-dark mr-2 float-right">Cancel</button>
    </form>
    </div>
</div>
</div>
    
@endsection

@section('footer')

