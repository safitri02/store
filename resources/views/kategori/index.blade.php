@extends('lay.temp')
@section('title', 'Halaman Kategori')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
</div>
<div class="card-body">
<a href="/add_category" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <?php $no = 1; ?>
            @forelse ($kat as $k)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->name_category }}</td>
                    <td> 
                        <a href="/category_delete/{{ $k->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                        <a href="/category_update/{{ $k->id }}" class="btn btn-warning btn-sm"> Edit </a>
                    </td>
                </tr>
                </tbody>

                @empty
                <p class="text-center">Data Kosong</p>

            @endforelse
        
        </table>
    </div>
</div>
</div>
@endsection

@section('footer')

