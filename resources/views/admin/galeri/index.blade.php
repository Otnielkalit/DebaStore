@extends('admin.layouts.master')
@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Galeri</h4>
                </div>
                <div class="card-body bg-light">
                    <a href="{{ url('/addgaleri') }}"><button type="submit" class="btn btn-icon icon-left btn-info"
                            value="Save"><i class="fas fa-user-plus"></i>Tambah</button></a>
                    <div class="table-responsive">
                        <h4 class="title text-center">Galeri Deba</h4>
                        <div class="row">
                            @foreach ($galeri as $galeri)
                            <div class="col-12 col-md-4 col-lg-4">
                                <article class="article article-style-c">
                                    <div class="article-header">
                                        <div class="article-image" data-background="galeriimage/{{ $galeri->image }}">
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <div class="article-category"><a>Update terkahir</a>
                                            <div class="bullet"></div><a>{{ $galeri->created_at }}</a>
                                        </div>
                                        <div class="article-title">
                                            <h5 class="text-center">{{ $galeri->title }}</h5>
                                            <p class="text-center">{{ $galeri->caption }}</p>
                                        </div>
                                        <div class="article-user">
                                            <a class="btn btn-icon btn-success" href="{{ url('/galeriedit', $galeri->id) }}"><i class="fas fa-user-edit"></i></a>
                                            <a class="btn btn-icon btn-danger" href="{{ url('/deletegaleri', $galeri->id) }}"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
