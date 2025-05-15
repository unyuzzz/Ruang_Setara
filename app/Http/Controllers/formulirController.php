<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiLaporan;
use App\Models\Formulir;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormulirController extends Controller
{
    // Menampilkan daftar laporan dengan fitur pencarian
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;

        // Inisialisasi query
        $query = Formulir::query();

        // Jika kata kunci tidak kosong, tambahkan filter
        if (!empty($katakunci)) {
            $query->where(function($q) use ($katakunci) {
                $q->where('nama_pelapor', 'like', "%$katakunci%")
                  ->orWhere('terlapor', 'like', "%$katakunci%");
            });
        }

        // Pagination dan urut berdasarkan tanggal dibuat
        $formulir = $query->orderBy('created_at', 'desc')->paginate(10);
        $formulir->appends($request->all()); // Menjaga query string saat pindah halaman

        return view('formulir.index', compact('formulir'));
    }

    // Menampilkan form untuk membuat laporan baru
    public function create()
    {
        return view('formulir.create');
    }

    // Menyimpan laporan baru ke database
   public function store(Request $request)
{
    // Simpan input sementara ke session (untuk repopulate saat error)
    Session()->flash('nama_pelapor', $request->nama_pelapor);
    Session()->flash('kontak', $request->kontak);
    Session()->flash('terlapor', $request->terlapor);
    Session()->flash('tanggal_kejadian', $request->tanggal_kejadian);
    Session()->flash('lokasi', $request->lokasi);
    Session()->flash('kronologi', $request->kronologi);
    Session()->flash('jenis', $request->jenis);

    // Validasi input
    $validated = $request->validate([
        'nama_pelapor' => 'nullable|string|max:255',
        'kontak' => 'nullable|string|max:255',
        'terlapor' => 'required|string|max:255',
        'tanggal_kejadian' => 'required|date',
        'lokasi' => 'required|string',
        'kronologi' => 'required|string',
        'jenis' => 'required|array',
    ], [
        'nama_pelapor.string' => 'Nama pelapor harus berupa teks.',
        'kontak.string' => 'Kontak harus berupa teks.',
        'terlapor.required' => 'Nama terlapor wajib diisi.',
        'terlapor.string' => 'Nama terlapor harus berupa teks.',
        'tanggal_kejadian.required' => 'Tanggal kejadian wajib diisi.',
        'tanggal_kejadian.date' => 'Tanggal kejadian harus berupa format tanggal yang valid.',
        'lokasi.required' => 'Lokasi kejadian wajib diisi.',
        'lokasi.string' => 'Lokasi harus berupa teks.',
        'kronologi.required' => 'Kronologi wajib diisi.',
        'kronologi.string' => 'Kronologi harus berupa teks.',
        'jenis.required' => 'Jenis kekerasan wajib dipilih.',
        'jenis.array' => 'Jenis kekerasan tidak valid.',
    ]);

    // Simpan data ke database
    $validated['jenis'] = implode(', ', $validated['jenis']); // array jenis jadi string

    Formulir::create($validated);

    return redirect()->route('formulir.index')->with('success', 'Data berhasil ditambahkan!');
}



    // Menampilkan detail laporan berdasarkan ID
    public function show($id)
    {
        $formulir = Formulir::findOrFail($id);
        return view('formulir.show', compact('formulir'));
    }

    // Menampilkan form untuk mengedit laporan
    public function edit($id)
    {
        $formulir = Formulir::findOrFail($id);
        return view('formulir.edit', compact('formulir'));
    }

    // Memperbarui laporan yang sudah ada
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'terlapor' => 'required|string|max:255',
            'tanggal_kejadian' => 'required|date',
            'lokasi' => 'required|string',
            'kronologi' => 'required|string',
            'jenis' => 'required|array',
        ]);

        $validated['jenis'] = json_encode($validated['jenis']); // Simpan jenis sebagai JSON

        $formulir = Formulir::findOrFail($id);
        $formulir->update($validated);

        return redirect()->route('formulir.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    // Menghapus laporan berdasarkan ID
    public function destroy($id)
    {
        $formulir = Formulir::findOrFail($id);
        $formulir->delete();
    }
}

       