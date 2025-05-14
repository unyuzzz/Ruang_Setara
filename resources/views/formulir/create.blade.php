@extends('komponen.template')
@section('content')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h4>Formulir Pengaduan</h4>
    <form action="{{ url('formulir') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" value="{{ old('nama_pelapor') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kontak" id="kontak" value="{{ old('kontak') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="terlapor" class="col-sm-2 col-form-label">Terlapor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="terlapor" id="terlapor" value="{{ old('terlapor') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tanggal_kejadian" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_kejadian" id="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="lokasi" id="lokasi" rows="2">{{ old('lokasi') }}</textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kronologi" class="col-sm-2 col-form-label">Kronologi</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="kronologi" id="kronologi" rows="4">{{ old('kronologi') }}</textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Jenis Pelecehan</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis[]" value="Verbal" id="verbal">
                    <label class="form-check-label" for="verbal">Verbal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis[]" value="Fisik" id="fisik">
                    <label class="form-check-label" for="fisik">Fisik</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="jenis[]" value="Visual" id="visual">
                    <label class="form-check-label" for="visual">Visual</label>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">KIRIM</button>
                <a href="{{ route('formulir.index') }}" class="btn btn-secondary">LIHAT DATA</a>
            </div>
        </div>
    </form>
</div>

<!-- ALERT SUCCESS -->
@if(session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif

@endsection