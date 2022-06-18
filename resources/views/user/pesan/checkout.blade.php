@extends('user.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('list-menu') }}">Menu</a></li>
                            <li class="breadcrumb-item">Check Out</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-shopping-cart">Check Out</i></h4>
                        @if (!empty($pesanan))
                            <p class="text-end">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ url('productimage') }}/{{ $pesanan_detail->barang->gambar }}" style="width: 100px; height:100px;" class="card-img-top" alt="product image"/>
                                    </td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }} buah</td>
                                    <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                    <td>
                                        <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin Ingin Menghapus Produk?');">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <td class="text-end" colspan="5"><strong>Total Harga :</strong></td>
                            <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                            @if(count($pesanan_details) > 0 )
                            <td>
                                <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                                    onclick="return confirm('Yakin Mau CheckOut?');">
                                    <i class="fa fa-shopping-cart"></i>Check Out</a>
                            </td>
                            @endif
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
