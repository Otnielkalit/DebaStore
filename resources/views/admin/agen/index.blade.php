@extends('admin.layouts.master')
@section('content')
    <div class="row ">
        <div class="col-12">
            {{-- <div class="card">
                <div class="card-header">
                    <h4>Tambah Agen</h4>
                </div>
                <form action="{{ url('/uploadagen') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Agen / Pelayan</label>
                            <input type="text" name="name" class="form-control" required="" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <input type="text" name="speciality" class="form-control" required="">
                        </div>
                        <div class="section-title mt-0">Masukkan link sosial media NB : (jika tidak ada beri tanda "-")
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" required="">
                        </div>
                        <div class="section-title">Masukkan foto Agen / Pelayan</div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="imageprofile" required="">Choose image</label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-icon icon-left btn-info" value="Save"><i
                                class="fas fa-user-plus"></i>Tambah</button>
                    </div>

                </form>
            </div> --}}
            <div class="card">
                <div class="card-header">
                    <h4>Data Agen & Pelayan</h4>
                </div>
                <div class="card-body">
                    <a href="{{ url('/addagen') }}"><button type="submit" class="btn btn-icon icon-left btn-info" value="Save"><i class="fas fa-user-plus"></i>Tambah</button></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Posisi</th>
                                    <th class="text-center">Akun SosMed</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td class="py-1 text-center">
                                            <img style="height:70px ; width:70px;" src="agenimage/{{ $data->image }}"
                                                alt="image profile" class="mr-3 user-img-radious-style user-list-img"
                                                width="100" />
                                        </td>
                                        <td class="text-center">{{ $data->name }}</td>
                                        <td class="text-center">{{ $data->speciality }}</td>
                                        <td class="text-center">
                                            <a href="{{ $data->facebook }}" target="_blank" class="btn btn-icon btn-primary"><i class=" fab fa-facebook-f"></i></a>
                                            <a href="{{ $data->instagram }}" target="_blank" class="btn btn-icon btn-info"><i class="fab fa-instagram"></i></a>
                                            <a href="{{ $data->twitter }}" target="_blank" class="btn btn-icon btn-success"><i class="fab fa-whatsapp"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-icon btn-success" href="{{ url('/updateagen', $data->id) }}"><i class="fas fa-user-edit"></i></a>
                                            <a class="btn btn-icon btn-danger" href="{{ url('/deleteagen', $data->id) }}"><i class="fas fa-trash"></i></a>
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
@endsection
