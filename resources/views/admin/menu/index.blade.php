@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambahkan Produk Anda Disini</h4>
                        <p class="card-description">
                            <a href="{{ route('add.menu') }}"><button type="button" class="btn btn-info btn-icon-text">Tambah Menu<i class="mdi mdi-bookmark-plus"></i></button></a>
                          </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-center"><h4>Nama Produk</h4></th>
                                        <th class="text-center"><h4>Harga</h4></th>
                                        <th class="text-center"><h4>Deskripsi</h4></th>
                                        <th class="text-center"><h4>Stok</h4></th>
                                        <th class="text-center"><h4>Gambar Produk</h4></th>
                                        <th class="text-center"><h4>Action</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataMenu as $data)

                                    <tr>
                                        <td class="text-center">{{ $data->nama_barang }}</td>
                                        <td class="text-center">{{ $data->harga }}</td>
                                        <td class="text-center">{{ $data->keterangan }}</td>
                                        <td class="text-center">{{ $data->stok }}</td>
                                        <td class="text-center"><img src="productimage/{{ $data->gambar }}" style="height: 100px; width:100px; align-item:center;" alt="produk"></td>
                                        <td class="text-center">
                                            <a href="{{ url('/deletemenu', $data->id) }}"><button type="button" class="btn btn-danger btn-icon-text"><i class="mdi mdi-delete"></i> Delete</button></a>
                                            <a href="{{ url('/updateview',$data->id) }}"><button type="button" class="btn btn-warning btn-icon-text"><i class="ti-reload btn-icon-prepend"></i>Edit</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection