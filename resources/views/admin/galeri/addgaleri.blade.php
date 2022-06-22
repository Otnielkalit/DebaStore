@extends('admin.layouts.master')
@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Galeri</h4>
                </div>
                <form action="{{ url('/galeriadd') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title Galeri</label>
                            <input class="form-control" type="text" name="title" placeholder="Title Galeri" required>
                        </div>
                        <div class="form-group">
                            <label>Caption</label>
                            <input class="form-control" type="text" name="title" placeholder="Caption Galeri" required>
                        </div>
                        <div class="section-title">Gambar</div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" required>
                            <label class="custom-file-label" for="customFile">klik untuk memilih gambar</label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-icon icon-left btn-info" value="Save"><i class="fas fa-plus"></i>Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
