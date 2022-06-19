@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel User Activated</h4>
            <p class="card-description">Table Penngguna Deba Store</p>
            <a href="{{ route('trash.user') }}" style="float: right"><button type="button" class="btn btn-warning btn-icon-tex" ><i class="ti-alert btn-icon-prepend"></i>Trashed</button></a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataUser as $index => $data)

                        <tr class="text-center">
                            <td class="text-center"><h5>{{ $index + $dataUser->firstItem() }}</h5></td>
                            <td class="text-center"><h6>{{ $data->name }}</h6></td>
                            <td class="text-center"><h6>{{ $data->email }}</h6></td>
                            @if ($data->usertype == '0')
                                <td class="text-center">
                                    <a href="{{ url('/delete-role/'.$data->id) }}" class="delete" data-id={{ $data->id }}><button type="button" class="btn btn-outline-danger btn-icon-text"><i class="mdi mdi-delete"></i>Not Activated</button></a>
                                </td>
                            @else
                            <td class="text-center">
                                <a href="#"><button type="button" class="btn btn-warning btn-icon-tex" disabled ><i class="ti-alert btn-icon-prepend"></i>Not Allowed</button></a>
                            </td>
                            @endif

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $dataUser->links() }}
            </div>
        </div>
    </div>
</div>
@endsection