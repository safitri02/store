@extends('lay.temp')
@section('title', 'Halaman Penjual')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
</div>
<div class="card-body">
<a href="/add_product" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori Produk</th>
                    <th>Jumlah Produk</th>
                    <th> Harga Barang</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <?php $no = 1; ?>
            @forelse ($produk as $p)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->kategori->name_category }}</td>
                    <td>{{ $p->qty }}</td>
                    <td>Rp.{{ number_format($p->price) }}</td>
                    <td>
                    <img src="{{ url('/storage/' .$p->image ) }}" style="max-width:30px;"> 
                    </td>
                    <td> 
                        <a href="/product_delete/{{ $p->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                        <a href="/product_delete/{{ $p->id }}" class="btn btn-warning btn-sm"> Edit </a>
                    </td>
                </tr>
                </tbody>

                @empty
                <p class="text-center">Data Kosong</p>

            @endforelse
           
        </table>
        <div class="justify-content-center mt-5 text-center">
            {{ $produk->links() }}
        </div>
         
    </div>
</div>
</div>
@endsection

@section('footer')

