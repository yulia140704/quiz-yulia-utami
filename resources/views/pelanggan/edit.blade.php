@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 100vh; background-color: #fce4ec; padding-top: 50px; padding-bottom: 50px;">
    <div class="card mx-auto" style="max-width: 800px; background-color: #f8d7da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h1 class="text-center mb-4" style="color: #d81b60;">Edit Pelanggan</h1>
            <form action="{{ route('pelanggan.update', $pelanggan->pel_id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Input Pelanggan Golongan -->
                <div class="mb-3">
                    <label for="pel_id_gol" class="form-label" style="color: #d81b60;">Golongan</label>
                    <input type="number" class="form-control" id="pel_id_gol" name="pel_id_gol" value="{{ old('pel_id_gol', $pelanggan->pel_id_gol) }}" required>
                </div>

                <!-- Input Nomor Pelanggan -->
                <div class="mb-3">
                    <label for="pel_no" class="form-label" style="color: #d81b60;">Nomor Pelanggan</label>
                    <input type="text" class="form-control" id="pel_no" name="pel_no" value="{{ old('pel_no', $pelanggan->pel_no) }}" required>
                </div>

                <!-- Input Nama Pelanggan -->
                <div class="mb-3">
                    <label for="pel_nama" class="form-label" style="color: #d81b60;">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="pel_nama" name="pel_nama" value="{{ old('pel_nama', $pelanggan->pel_nama) }}" required>
                </div>

                <!-- Input Alamat Pelanggan -->
                <div class="mb-3">
                    <label for="pel_alamat" class="form-label" style="color: #d81b60;">Alamat</label>
                    <textarea class="form-control" id="pel_alamat" name="pel_alamat" rows="3" required>{{ old('pel_alamat', $pelanggan->pel_alamat) }}</textarea>
                </div>

                <!-- Input Nomor HP -->
                <div class="mb-3">
                    <label for="pel_hp" class="form-label" style="color: #d81b60;">Nomor HP</label>
                    <input type="text" class="form-control" id="pel_hp" name="pel_hp" value="{{ old('pel_hp', $pelanggan->pel_hp) }}" required>
                </div>

                <!-- Input KTP -->
                <div class="mb-3">
                    <label for="pel_ktp" class="form-label" style="color: #d81b60;">Nomor KTP</label>
                    <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" value="{{ old('pel_ktp', $pelanggan->pel_ktp) }}" required>
                </div>

                <!-- Input Seri -->
                <div class="mb-3">
                    <label for="pel_seri" class="form-label" style="color: #d81b60;">Nomor Seri</label>
                    <input type="text" class="form-control" id="pel_seri" name="pel_seri" value="{{ old('pel_seri', $pelanggan->pel_seri) }}" required>
                </div>

                <!-- Input Meteran -->
                <div class="mb-3">
                    <label for="pel_meteran" class="form-label" style="color: #d81b60;">Nomor Meteran</label>
                    <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" value="{{ old('pel_meteran', $pelanggan->pel_meteran) }}" required>
                </div>

                <!-- Input Status Aktif -->
                <div class="mb-3">
                    <label for="pel_aktif" class="form-label" style="color: #d81b60;">Status Aktif</label>
                    <select class="form-control" id="pel_aktif" name="pel_aktif" required>
                        <option value="Y" {{ old('pel_aktif', $pelanggan->pel_aktif) == 'Y' ? 'selected' : '' }}>Aktif</option>
                        <option value="N" {{ old('pel_aktif', $pelanggan->pel_aktif) == 'N' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>

                <!-- Input User ID -->
                <div class="mb-3">
                    <label for="pel_id_user" class="form-label" style="color: #d81b60;">ID User</label>
                    <input type="number" class="form-control" id="pel_id_user" name="pel_id_user" value="{{ old('pel_id_user', $pelanggan->pel_id_user) }}" required>
                </div>

                <!-- Tombol Update dan Kembali -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger" style="background-color: #d81b60; border-color: #d81b60; font-size: 16px; border-radius: 8px;">Update</button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary" style="border-radius: 8px;">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
