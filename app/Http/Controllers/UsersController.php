<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Menampilkan semua data user
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'user_nama' => 'required|max:100',
            'user_email' => 'required|email|max:50|unique:tb_users,user_email',
            'user_password' => 'required|min:6',
            'user_alamat' => 'required|max:255',
            'user_pos' => 'required|max:50',
            'user_hp' => 'required|max:15',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:Y,N',
        ]);

        User::create([
            'user_nama' => $request->user_nama,
            'user_email' => $request->user_email,
            'user_password' => bcrypt($request->user_password),
            'user_alamat' => $request->user_alamat,
            'user_pos' => $request->user_pos,
            'user_hp' => $request->user_hp,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);

        return redirect()->route('users.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_nama' => 'required|max:100',
            'user_email' => 'required|email|max:50|unique:tb_users,user_email,' . $id,
            'user_password' => 'nullable|min:6',
            'user_alamat' => 'required|max:255',
            'user_pos' => 'required|max:50',
            'user_hp' => 'required|max:15',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:Y,N',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'user_nama' => $request->user_nama,
            'user_email' => $request->user_email,
            'user_password' => $request->user_password ? bcrypt($request->user_password) : $user->user_password,
            'user_alamat' => $request->user_alamat,
            'user_pos' => $request->user_pos,
            'user_hp' => $request->user_hp,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);

        return redirect()->route('users.index')->with('success', 'Data berhasil diubah');
    }

    // Menghapus data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Data berhasil dihapus');
    }
}
