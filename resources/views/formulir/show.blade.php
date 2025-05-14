@extends('komponen.template')
@section('content')

<h4 class="mb-3">Detail Laporan</h4>

<table class="table table-bordered">
    <tr>
        <th>Nama Pelapor</th>
        <td>{{ $formulir->nama_pelapor ?? '-' }}</td>
    </tr>
    <tr>
        <th>Kontak</th>
        <td>{{ $formulir->kontak ?? '-' }}</td>
    </tr>
    <tr>
        <th>Terlapor</th>
        <td>{{ $formulir->terlapor }}</td>
    </tr>
    <tr>
        <th>Tanggal Kejadian</th>
        <td>{{ \Carbon\Carbon::parse($formulir->tanggal_kejadian)->format('d M Y') }}</td>
    </tr>
    <tr>
        <th>Lokasi</th>
        <td>{{ $formulir->lokasi }}</td>
    </tr>
    <tr>
        <th>Kronologi</th>
        <td>{{ $formulir->kronologi }}</td>
    </tr>
    <tr>
        <th>Jenis Pelecehan</th>
        <td>{{ $formulir->jenis }}</td>
    </tr>
</table>

<a href="{{ route('formulir.index') }}" class="btn btn-secondary">Kembali</a>
 
@endsection