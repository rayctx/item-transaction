@extends('layout.main')

@section('content')
    <h3>Data Transaksi Baru</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('transactions') }}'">
            Kembali
        </button>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ url('transactions') }}">
            @csrf
            <div class="row mb-3">
                <label for="txtitem" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-4">
                    <select name="txtitem" id="txtitem" class="form-select">
                        <option value="" selected>-Pilih-</option>
                        <option value="1">Kopi</option>
                        <option value="2">Teh</option>
                        <option value="3">Pasta Gigi</option>
                        <option value="4">Sabun Mandi</option>
                        <option value="5">Sampo</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtjt" class="col-sm-2 col-form-label">Jumlah Terjual</label>
                <div class="col-sm-4">
                    <input type="text" name="txtjt" id="txtjt" value="{{ old('txtjt') }}" class="form-control form-control-sm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
