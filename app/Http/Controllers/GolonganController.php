<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    // Menampilkan semua data golongan
    public function index()
    {
        $golongan = Golongan::all();
        return view('golongan.index', compact('golongan'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('golongan.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'gol_kode' => 'required|max:10',
            'gol_nama' => 'required|max:50',
        ]);

        Golongan::create($request->all());
        return redirect()->route('golongan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($id)
{
    $golongan = Golongan::where('gol_id', $id)->firstOrFail();
    return view('golongan.edit', compact('golongan'));
}


    // Menyimpan perubahan data
    public function update(Request $request, $id)
{
    $request->validate([
        'gol_kode' => 'required|max:10',
        'gol_nama' => 'required|max:50',
    ]);

    $golongan = Golongan::where('gol_id', $id)->firstOrFail();
    $golongan->update($request->all());

    return redirect()->route('golongan.index')->with('success', 'Data berhasil diubah');
}

    // Menghapus data
    public function destroy($id)
{
    $golongan = Golongan::where('gol_id', $id)->firstOrFail();
    $golongan->delete();

    return redirect()->route('golongan.index')->with('success', 'Data berhasil dihapus');
}

}
