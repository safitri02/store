@extends('lay.temp')
@section('title', 'Halaman Penjual')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Tambah Data Kategori</h4>
    <form class="forms-sample" method="post" action="/add_category" enctype="multipart/form-data"> 
    @csrf
        <div class="form-group">
        <label for="name">Nama Kategori</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="name_category" placeholder="Nama Kategori">
        </div>
        <button type="submit" class="btn btn-success float-right">Tambah Data</button>
        <button class="btn btn-dark mr-3 float-right">Cancel</button>
    </form>
    </div>
</div>
</div>
    
@endsection

@section('footer')

