@extends('user.layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($aboutuss as $aboutus)
                <div class="card col-sm-12">
                    <strong>{{ $aboutus->judul }}</strong><br>
                    <img src="{{ url('aboutusimage') }}/{{ $aboutus->gambar }}" style="width:auto; height:350px;"
                        class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $aboutus->nama_barang }}</h5>
                        <p class="card-text">
                            <strong>{{ $aboutus->deskripsi }}</strong><br>
                            <hr>
                            <strong><a href="{{ $aboutus->link }}">{{ $aboutus->link }}</a></strong> <br>
                        </p>
                        {{-- <a href="{{ url('pesan') }}/{{ $aboutus->id }}" class="btn btn-primary"><i
                                class="fas fa-shopping-cart"></i> Pesan</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
