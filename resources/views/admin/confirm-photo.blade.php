@extends('admin.layouts.master')
@section('content')
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Upload Bukti Foto</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mainTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Kode</th>
                                <th>Jumlah Harga</th>
                                <th>Tanggal</th>
                                <th>Alamat Penerima</th>
                                <th>Upload Bukti Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($dataConfirmPhoto as $index => $data)
                            <form action="{{ url('/confirm-photo-process/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>{{ $index + $dataConfirmPhoto->firstItem() }}</td>
                                    <td>{{ $data->users->name }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td>Rp{{ number_format($data->jumlah_harga, 0, ',', '.') }}</td>
                                    <td>{{ $data->updated_at->isoFormat('dddd, D MMM Y') }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>
                                        <input type="file" name="img">
                                        @error('img')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </td>
                                </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dataConfirmPhoto->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection