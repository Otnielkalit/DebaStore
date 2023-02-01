@extends('user.layouts.app')
@section('title')
    Agen & Pelayan
@endsection
@section('content')
    <section class="p-4 text-center w-100">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($galeri as $galeri)
                <div class="col">
                    <div class="card h-100">
                        <img src="galeriimage/{{ $galeri->image }}" class="card-img-top" alt="product image" height="400px" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $galeri->title }}</h5>
                            <p class="card-text">{{ $galeri->caption }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last Update {{ $galeri->updated_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
