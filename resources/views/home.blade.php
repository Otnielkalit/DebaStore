@extends('user.layouts.app')

@section('content')
    <h1>Hai</h1>
<<<<<<< HEAD
=======
    <div class="container">
        <div class="row">
            @foreach ($barangs as $barang)
            <div class="card col-sm-4">
                <img src="{{ url('productimage') }}/{{ $barang->gambar }}" height="300px" class="card-img-top" alt="Fissure in Sandstone"/>
                <div class="card-body">
                  <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                  <p class="card-text">
                    <strong>Harga :</strong> Rp.{{ number_format($barang->harga) }} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>


                    <strong>Keterangan :{{ $barang->keterangan }}</strong> <br>
                    <strong><a href="/detailbandrek"> Informasi Selengkapnya tentang Produk ini</a></strong>

                  </p>
                  @if ($barang->stok == 0)
                    <p class="text-danger">*Maaf, stok sudah habis.</p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary disabled"><i class="fas fa-shopping-cart"></i> Pesan</a>
                  @else
                  <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                  @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

=======
>>>>>>> 77294b50d93d62eaae8de367ddaead906795e5d5
@endsection
