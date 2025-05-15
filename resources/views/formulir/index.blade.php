@extends('komponen.template')

@section('content')


<!-- FORM PENCARIAN -->
<div class="pb-3 d-flex justify-content-between align-items-center mt-4">
    <form class="d-flex" action="{{ url('formulir') }}" method="get">
        <input class="form-control me-2" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Cari nama pelapor / terlapor...">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
    </form>
    <a href="{{ route('formulir.create') }}" class="btn btn-primary">+ Tambah Laporan</a>
</div>

<!-- TABEL DATA -->
@if (isset($formulir) && $formulir->count() > 0)
<div class="table-responsive mt-3">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Kontak</th>
                <th>Terlapor</th>
                <th>Tanggal Kejadian</th>
                <th>Jenis Pelecehan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $i = $formulir->firstItem() @endphp
            @foreach ($formulir as $item)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->nama_pelapor ?? '-' }}</td>
                <td>{{ $item->kontak ?? '-' }}</td>
                <td>{{ $item->terlapor }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal_kejadian)->format('d M Y') }}</td>
                <td>{{ is_array($item->jenis) ? implode(', ', $item->jenis) : $item->jenis }}</td>
                <td>
                    <a href="{{ route('formulir.edit'.$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin ingin menghapus laporan ini?')" action="{{ url('formulir/'.$item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $formulir->links() }}
    </div>
</div>
@else
<div class="alert alert-info mt-3">
    Tidak ada data laporan ditemukan.
</div>
@endif

@endsection
