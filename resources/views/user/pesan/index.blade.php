@extends('user.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item">Check Out</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><span class="text-muted">{{ $barang->nama_barang }}</span></h2>
                    <p class="lead">{{ $barang->keterangan }}</p> <br>
                    <table class="table table-borderless">
                        <tr>
                            <td>Harga</td>
                            <td></td>
                            <td>Rp. {{ number_format($barang->harga) }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td></td>
                            <td>{{ $barang->stok }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesan</td>
                            <td></td>
                            <td>
                                <form action="{{ url('pesan') }}/{{ $barang->id }}" method="post">
                                    @csrf
                                    <input type="number" name="jumlah_pesan" class="form-control" required="">
                                    <button type="submit" class="btn btn-primary mt-2"><i
                                            class="fas fa-shopping-cart"></i> Add cart</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ url('productimage') }}/{{ $barang->gambar }}"  alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
