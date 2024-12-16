@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-pink" style="color: #a94442; font-weight: bold;">Edit Data User</h2>

    <!-- Form untuk mengupdate data -->
    <form action="{{ route('users.update', $user->user_id) }}" method="POST" style="background-color: #fffafc; border: 1px solid #f8d7da; padding: 20px; border-radius: 8px;">
        @csrf
        @method('PUT')
        
        <!-- Input Nama Pengguna -->
        <div class="mb-3">
            <label for="user_nama" class="form-label" style="color: #a94442;">Nama Pengguna</label>
            <input type="text" id="user_nama" name="user_nama" class="form-control @error('user_nama') is-invalid @enderror" value="{{ old('user_nama', $user->user_nama) }}" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
            @error('user_nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Email -->
        <div class="mb-3">
            <label for="user_email" class="form-label" style="color: #a94442;">Email</label>
            <input type="email" id="user_email" name="user_email" class="form-control @error('user_email') is-invalid @enderror" value="{{ old('user_email', $user->user_email) }}" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
            @error('user_email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Password -->
        <div class="mb-3">
            <label for="user_password" class="form-label" style="color: #a94442;">Password</label>
            <input type="password" id="user_password" name="user_password" class="form-control @error('user_password') is-invalid @enderror" style="background-color: #ffeaf2; border: 1px solid #f8d7da;">
            <small class="form-text text-muted" style="color: #a94442;">Kosongkan jika tidak ingin mengubah password.</small>
            @error('user_password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Alamat -->
        <div class="mb-3">
            <label for="user_alamat" class="form-label" style="color: #a94442;">Alamat</label>
            <textarea id="user_alamat" name="user_alamat" class="form-control @error('user_alamat') is-invalid @enderror" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>{{ old('user_alamat', $user->user_alamat) }}</textarea>
            @error('user_alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Posisi -->
        <div class="mb-3">
            <label for="user_pos" class="form-label" style="color: #a94442;">Posisi</label>
            <input type="text" id="user_pos" name="user_pos" class="form-control @error('user_pos') is-invalid @enderror" value="{{ old('user_pos', $user->user_pos) }}" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
            @error('user_pos')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input No HP -->
        <div class="mb-3">
            <label for="user_hp" class="form-label" style="color: #a94442;">No HP</label>
            <input type="text" id="user_hp" name="user_hp" class="form-control @error('user_hp') is-invalid @enderror" value="{{ old('user_hp', $user->user_hp) }}" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
            @error('user_hp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Role -->
        <div class="mb-3">
            <label for="user_role" class="form-label" style="color: #a94442;">Role</label>
            <input type="number" id="user_role" name="user_role" class="form-control @error('user_role') is-invalid @enderror" value="{{ old('user_role', $user->user_role) }}" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
            @error('user_role')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Status Aktif -->
        <div class="mb-3">
            <label for="user_aktif" class="form-label" style="color: #a94442;">Status Aktif</label>
            <select id="user_aktif" name="user_aktif" class="form-control @error('user_aktif') is-invalid @enderror" style="background-color: #ffeaf2; border: 1px solid #f8d7da;" required>
                <option value="Y" {{ old('user_aktif', $user->user_aktif) == 'Y' ? 'selected' : '' }}>Aktif</option>
                <option value="N" {{ old('user_aktif', $user->user_aktif) == 'N' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
            @error('user_aktif')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Update dan Kembali -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn text-white" style="background-color: #f4a3c4;">Update</button>
            <a href="{{ route('users.index') }}" class="btn text-white" style="background-color: #d5b7c1;">Kembali</a>
        </div>
    </form>
</div>
@endsection
