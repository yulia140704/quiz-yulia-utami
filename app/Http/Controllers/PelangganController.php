<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan semua data pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('pelanggan.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'pel_id_gol' => 'required|integer',
            'pel_no' => 'required|max:20',
            'pel_nama' => 'required|max:50',
            'pel_alamat' => 'required|max:255',
            'pel_hp' => 'required|max:20',
            'pel_ktp' => 'required|max:50',
            'pel_seri' => 'required|max:50',
            'pel_meteran' => 'required|max:11',
            'pel_aktif' => 'required|in:Y,N',
            'pel_id_user' => 'required|integer',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($pel_id)
    {
        $pelanggan = Pelanggan::findOrFail($pel_id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $pel_id)
    {
        $request->validate([
            'pel_id_gol' => 'required|integer',
            'pel_no' => 'required|max:20',
            'pel_nama' => 'required|max:50',
            'pel_alamat' => 'required|max:255',
            'pel_hp' => 'required|max:20',
            'pel_ktp' => 'required|max:50',
            'pel_seri' => 'required|max:50',
            'pel_meteran' => 'required|max:11',
            'pel_aktif' => 'required|in:Y,N',
            'pel_id_user' => 'required|integer',
        ]);

        $pelanggan = Pelanggan::findOrFail($pel_id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil diubah');
    }

    // Menghapus data
    public function destroy($pel_id)
    {
        $pelanggan = Pelanggan::findOrFail($pel_id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus');
    }
}

