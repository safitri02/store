@extends('lay.temp')
@section('title', 'Halaman Kategori')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Edit Data Kategori</h4>
    <form class="forms-sample" method="post" action="/category_update/{{ $kat->id }}"> 
    @csrf
    @method('PUT')
        <div class="form-group">
        <label for="name">Nama Kategori</label>
        <input type="text" autofocus autocomplete="off" value="{{ $kat->name_category }}" class="form-control" name="name_category" placeholder="Nama Kategori">
        </div>
        <button type="submit" class="btn btn-success float-right">Ubah Data</button>
        <button type="reset" class="btn btn-dark mr-3 float-right">Cancel</button>
    </form>
    </div>
</div>
</div>
    
@endsection

@section('footer')

