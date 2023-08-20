@extends('layout.main')

@section('content')
    <h3>Ubah Data Barang</h3>
    </h3>
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('items') }}'">
            Kembali
        </button>
    </div>
    {{-- @error('txtin') is-invalid @enderror | value="{{ old('txtin') }}" --}}
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
        <form method="POST" action="{{ url('items/'.$id) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="txtin" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control-plaintext" id="txtin" name="txtin" value="{{ $txtin }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtik" class="col-sm-2 col-form-label">Jenis Barang</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtik" id="txtik">
                        <option value="">-Pilih-</option>
                        <option value="1"{{ ($txtik=='1') ? 'selected':'' }}>Konsumsi</option>
                        <option value="2"{{ ($txtik=='2') ? 'selected':'' }}>Pembersih</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtstock" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-4">
                    <input type="text" name="txtstock" id="txtstock" value="{{ $txtstock }}" class="form-control form-control-sm">
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
