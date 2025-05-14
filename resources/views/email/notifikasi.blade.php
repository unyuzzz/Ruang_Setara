<h2>Laporan Pelecehan Baru</h2>

<p><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] ?? '-' }}</p>
<p><strong>Kontak:</strong> {{ $data['kontak'] ?? '-' }}</p>
<p><strong>Terlapor:</strong> {{ $data['terlapor'] }}</p>
<p><strong>Tanggal Kejadian:</strong> {{ $data['tanggal_kejadian'] }}</p>
<p><strong>Lokasi:</strong> {{ $data['lokasi'] }}</p>
<p><strong>Kronologi:</strong><br>{{ $data['kronologi'] }}</p>
<p><strong>Jenis Pelecehan:</strong> {{ $data['jenis'] }}</p>
