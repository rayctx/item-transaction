@extends('layout.main')

@section('content')
    <h3>Data Jenis Barang Baru</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('kinds') }}'">
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
        <form method="POST" action="{{ url('kinds') }}">
            @csrf
            <div class="row mb-3">
                <label for="txtkn" class="col-sm-2 col-form-label">Nama Jenis Barang</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control-sm" id="txtkn"
                        name="txtkn" value="{{ old('txtkn') }}">
                    {{-- @error('txtid')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror --}}
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtdes" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-4">
                    <input type="text" name="txtdes" id="txtdes" class="form-control form-control-sm" value="{{ old('txtdes') }}">
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
