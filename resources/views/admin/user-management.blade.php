@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel User</h4>
            <p class="card-description">Table Penngguna Deba Store</p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataUser as $data)

                        <tr class="text-center">
                            <td class="text-center"><h5>{{ $data->name }}</h5></td>
                            <td class="text-center"><h6>{{ $data->email }}</h6></td>
                            @if ($data->usertype == '0')
                                <td class="text-center">
                                    <a href="{{ url('/deleteuser', $data->id) }}"><button type="button" class="btn btn-outline-danger btn-icon-text"><i class="mdi mdi-delete"></i>Delete</button></a>
                                </td>
                            @else
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-icon-text"><i class="ti-alert btn-icon-prepend"></i>Not Allowed</button>
                            </td>
                            @endif

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection