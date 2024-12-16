@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-pink" style="color: #a94442; font-weight: bold;">Tambah Data User</h2>

    <form action="{{ route('users.store') }}" method="POST" style="background-color: #fffafc; border: 1px solid #f8d7da; padding: 20px; border-radius: 8px;">
        @csrf
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Nama Pengguna</label>
            <input type="text" name="user_nama" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Email</label>
            <input type="email" name="user_email" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Password</label>
            <input type="password" name="user_password" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Alamat</label>
            <textarea name="user_alamat" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Posisi</label>
            <input type="text" name="user_pos" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">No HP</label>
            <input type="text" name="user_hp" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Role</label>
            <input type="number" name="user_role" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Status Aktif</label>
            <select name="user_aktif" class="form-control" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
                <option value="Y">Aktif</option>
                <option value="N">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn text-white" style="background-color: #f4a3c4;">Tambah</button>
        <a href="{{ route('users.index') }}" class="btn text-white" style="background-color: #d5b7c1;">Kembali</a>
    </form>
</div>
@endsection
