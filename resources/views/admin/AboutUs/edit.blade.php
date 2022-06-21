@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit About Us</h4>
                        <form action="{{ route('edit.aboutus.process') }}" method="post" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" value="{{ $dataAboutUsUpdate->judul }}">
                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi"  cols="100%" rows="10" class="form-control" value="{{ $dataAboutUsUpdate->deskripsi }}"></textarea>
                                @error('deskripsi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="file" name="gambar" value="{{ $dataAboutUsUpdate->gambar }}">
                                @error('gambar')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="link" class="form-control"
                                    placeholder="Link Youtube atau Website" value="{{ $dataAboutUsUpdate->link }}">
                                @error('link')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <a href="{{ url('/aboutus') }}"><button type="button" class="btn btn-dark btn-icon-text" value="Save"><i class="mdi mdi-plus-box"></i> Kembali</button></a>
                            <button type="submit" class="btn btn-primary btn-icon-text" value="Save"><i class="mdi mdi-plus-box"></i>Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection



