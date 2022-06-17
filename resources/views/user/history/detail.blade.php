@extends('user.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('history') }}">History Pesanan</a></li>
                            <li class="breadcrumb-item">Detail Pemesanan</li>
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
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
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
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }} buah</td>
                                    <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-end" colspan="4"><strong>Kode Pesanan :</strong></td>
                                <td><strong>{{ ($pesanan->kode) }}</strong></td>
                            </tr>
                            <tr>
                                <td class="text-end" colspan="4"><strong>Total Pembayaran :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</strong></td>
                            </tr>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
