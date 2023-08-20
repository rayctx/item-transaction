@extends('layout.main')

@section('content')
    <h3>Data Transaksi</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('transactions/add') }}'">
            <i class="fas fa-plus circle">Tambah Transaksi</i>
        </button>
        {{-- <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('transaksi/add') }}'">
            <i class="fas fa-plus circle">Tambah Transaksi</i>
        </button>
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('transaksi/add') }}'">
            <i class="fas fa-plus circle">Tambah Jenis</i>
        </button> --}}
    </div>
    <div class="card-body">
        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congrats</strong> You added a students. {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <td>Nama Barang</td>
                    <td>Tanggal Transaksi</td>
                    <td>Stok</td>
                    <td>Jumlah Terjual</td>
                    <td>Jenis Barang</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $row)
                    <tr>
                        {{-- <th>{{ $loop->iteration }}</th> --}}
                        <th>{{ $row->items->item_name }}</th>
                        <th>{{ $row->transactions_date }}</th>
                        <th>{{ $row->items->stock }}</th>
                        <th>{{ $row->amount_sold }}</th>
                        <th>{{ $row->items->kinds->kinds_name }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
