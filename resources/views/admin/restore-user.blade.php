@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel User Deactivated</h4>
            <p class="card-description">Table Penngguna Deba Store</p>
            <a href="{{ route('restore.all.user') }}" style="float: right;"><button type="button" class="btn btn-primary">Restore All</button></a>
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
                    @foreach ($trashesUser as $data)

                        <tr class="text-center">
                            <td class="text-center"><h5>{{ $data->name }}</h5></td>
                            <td class="text-center"><h6>{{ $data->email }}</h6></td>
                            <td class="text-center">
                                <a href="{{ url('/restore/'.$data->id) }}" class="delete" data-id={{ $data->id }}><button type="button" class="btn btn-outline-danger btn-icon-text"><i class="mdi mdi-delete"></i>Restore</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('user.role') }}"><button type="button" class="btn btn-primary">Kembali ke halaman user</button></a>
            </div>
        </div>
    </div>
</div>
@endsection