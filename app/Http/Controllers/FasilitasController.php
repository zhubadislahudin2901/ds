<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $data = Fasilitas::latest()->paginate(10);
        return view('admin.fasilitas.index', compact('data'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        Fasilitas::create($data);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilita)
    {
        return view('admin.fasilitas.edit', ['fasilita' => $fasilita]);
    }

    public function update(Request $request, Fasilitas $fasilita)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($fasilita->gambar) {
                Storage::disk('public')->delete($fasilita->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        $fasilita->update($data);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilita)
    {
        if ($fasilita->gambar) {
            Storage::disk('public')->delete($fasilita->gambar);
        }

        $fasilita->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus.');
    }
}
