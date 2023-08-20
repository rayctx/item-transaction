@extends('layout.main')

@section('content')
    <h3>Data Jenis Barang</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('kinds/add') }}'">
            <i class="fas fa-plus circle">Tambah Jenis Barang</i>
        </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama Jenis</th>
                    <th>Deskripsi</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kinds as $row)
                    <tr>
                        {{-- <th>{{ $loop->iteration }}</th> --}}
                        <td>{{ $row->kinds_name }}</td>
                        <td>{{ $row->descriptions }}</td>
                        <td>
                            <button onclick="window.location='{{ url('kinds/'.$row->id) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
