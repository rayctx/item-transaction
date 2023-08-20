@extends('layout.main')

@section('content')
    <h3>Data Barang</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('items/add') }}'">
            <i class="fas fa-plus circle">Tambah Barang</i>
        </button>

        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil! </strong>{{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="" method="GET">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label">Cari Data:</label>
                    <div class="col-sm-4">
                        <input type="text" name="search" id="search" class="form-control form-control-sm" value="" placeholder="Search Data" autofocus>
                    </div>
                </div>
            </form>
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Jenis Barang</th>
                        <th>Ubah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $row)
                        <tr>
                            {{-- <th>{{ $loop->iteration }}</th> --}}
                            <td>{{ $row->item_name }}</td>
                            <td>{{ $row->stock }}</td>
                            <td>{{ $row->kinds_name }}</td>
                            <td>
                                <button onclick="window.location='{{ url('items/' . $row->id) }}'" type="button"
                                    class="btn btn-sm btn-info" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->item_name }}')" style="display: inline"
                                    method="POST" action="{{ 'items/' . $row->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete data" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($items)
                {{ $items->links() }}
            @endif
        </div>
        <script>
            function deleteData(name) {
                pesan = confirm('Apakah anda ingin menghapus data barang ${name} ?');
            }
        </script>
    @endsection
