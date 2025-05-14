<?php

namespace App\Http\Controllers;
use App\Models\KategoriPaket;
use Illuminate\Http\Request;

class KategoriPaketController extends Controller
{
    public function index()
    {
        $pakets = KategoriPaket::all();
        return view('paket.index', compact('pakets'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'jumlah' => 'required|string',
        ]);

        KategoriPaket::create($validated);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
    }

    public function edit(KategoriPaket $paket)
    {
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, KategoriPaket $paket)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|integer',
        ]);

        $paket->update($request->all());

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diupdate');
    }

    public function destroy(KategoriPaket $paket)
    {
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
    }
}