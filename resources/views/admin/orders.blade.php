@extends('admin.layouts.master')
@section('content')
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Order Details</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mainTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Kode</th>
                                <th>Jumlah Harga</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Alamat Penerima</th>
                                <th>Lihat Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($dataOrders as $data)
                                <tr>
                                    <td>{{ $no++; }}</td>
                                    <td>{{ $data->users->name }}</td>
                                    <td>{{ __('Sudah bayar') }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td>Rp{{ number_format($data->jumlah_harga, 0, ',', '.') }}</td>
                                    <td>{{ $data->updated_at->isoFormat('dddd, D MMM Y') }}</td>
                                    <td>{{ $data->gambar }}</td>
                                    <td>
                                        <a href="{{ url('/result-file/'.$data->id) }}" class="nav-link">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>{{ $data->gambar }}</td>
                                    <td>
                                        <form action="{{ url('/confirm-order/'.$data->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </form>
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