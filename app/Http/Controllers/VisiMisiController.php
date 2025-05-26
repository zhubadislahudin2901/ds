<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = VisiMisi::all();
        return view('admin.visiMisi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.visiMisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        VisiMisi::create($request->all());

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('admin.visiMisi.edit', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visiMisi->update($request->all());

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(VisiMisi $visiMisi)
    {
        $visiMisi->delete();

        return redirect()->route('visi-misi.index')->with('success', 'Data berhasil dihapus.');
    }
}
