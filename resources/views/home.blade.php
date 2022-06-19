@extends('user.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($barangs as $barang)
            <div class="card col-sm-6">
                <img src="{{ url('productimage') }}/{{ $barang->gambar }}" style="width:350px; height:350px;" class="card-img-top" alt="Fissure in Sandstone"/>
                <div class="card-body">
                  <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                  <p class="card-text">
                    <strong>Harga :</strong> Rp.{{ number_format($barang->harga) }} <br>
                    <strong>Stok :</strong> Rp. {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :{{ $barang->keterangan }}</strong> <br>
                    <strong><a href="/detailbandrek"> Informasi Selengkapnya tentang Produk ini</a></strong>
                  </p>
                  <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
