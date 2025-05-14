<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiLaporan;
use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormulirController extends Controller
{
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

    public function create()
    {
        return view('formulir.create');
    }

    public function store(Request $request)
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

        $validated['jenis'] = implode(', ', $validated['jenis']);

        $data = Formulir::create($validated);

        Mail::to('makhyanaul15@gmail.com')->send(new NotifikasiLaporan($data));

        return redirect()->route('formulir.index')->with('success', 'Laporan berhasil dikirim!');
    }

    public function show($id)
    {
        $formulir = Formulir::findOrFail($id);
        return view('formulir.show', compact('formulir'));
    }

    public function edit($id)
    {
        $data = Formulir::where('nama_pelapor', $id)->first();
        return view('formulir.edit')->with('data', $data);
    }

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

        $validated['jenis'] = implode(', ', $validated['jenis']);

        $formulir = Formulir::findOrFail($id);
        $formulir->update($validated);

        return redirect()->route('formulir.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $formulir = Formulir::findOrFail($id);
        $formulir->delete();

        return redirect()->route('formulir.index')->with('success', 'Laporan berhasil dihapus!');
    }
}
