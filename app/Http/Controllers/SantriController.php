<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $santris = Santri::all();
        return view('santri.index', compact('santris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|string|max:255',
            'nama_santri' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'asrama_id' => 'required|string|max:255',
            'total_paket_diterima' => 'nullable|string',
        ]);

        Santri::create($validated);

        return redirect()->route('santri.index')->with('success', 'Data Santri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Santri $santri)
    {
        return view('santri.show', compact('santri'));
    }

    public function exportPDF($nis)
    {
        $santri = Santri::findOrFail($nis);
        $pdf = Pdf::loadView('santri.pdf', compact('santri'));
        return $pdf->download('santri-' . $santri->nis . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Santri $santri)
    {
        return view('santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Santri $santri)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|unique:santris,nis,' . $santri->nis,
            'kelas' => 'required|string',
            'asrama' => 'required|string',
            'no_hp' => 'nullable|string',
        ]);

        $santri->update($validated);

        return redirect()->route('santri.index')->with('success', 'Data santri berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Santri $santri)
    {
        $santri->delete();
        return redirect()->route('santri.index')->with('success', 'Santri berhasil dihapus!');
    }
}
