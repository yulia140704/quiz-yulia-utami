@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 100vh; background-color: #fce4ec; padding-top: 50px; padding-bottom: 50px;">
    <div class="card mx-auto" style="max-width: 600px; background-color: #f8d7da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: #d81b60;">Tambah Pelanggan</h2>
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="pel_id_gol" style="color: #a94442;">Golongan</label>
                    <input type="number" class="form-control" id="pel_id_gol" name="pel_id_gol" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_no" style="color: #a94442;">No Pelanggan</label>
                    <input type="text" class="form-control" id="pel_no" name="pel_no" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_nama" style="color: #a94442;">Nama</label>
                    <input type="text" class="form-control" id="pel_nama" name="pel_nama" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_alamat" style="color: #a94442;">Alamat</label>
                    <textarea class="form-control" id="pel_alamat" name="pel_alamat" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="pel_hp" style="color: #a94442;">HP</label>
                    <input type="text" class="form-control" id="pel_hp" name="pel_hp" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_ktp" style="color: #a94442;">KTP</label>
                    <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_seri" style="color: #a94442;">Seri</label>
                    <input type="text" class="form-control" id="pel_seri" name="pel_seri" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_meteran" style="color: #a94442;">Meteran</label>
                    <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="form-group mb-3">
                    <label for="pel_aktif" style="color: #a94442;">Status</label>
                    <select class="form-control" id="pel_aktif" name="pel_aktif" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                        <option value="Y">Aktif</option>
                        <option value="N">Tidak Aktif</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="pel_id_user" style="color: #a94442;">User ID</label>
                    <input type="number" class="form-control" id="pel_id_user" name="pel_id_user" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <button type="submit" class="btn btn-danger btn-lg w-100" style="border-radius: 8px; background-color: #d81b60; border-color: #d81b60; color: white; font-size: 16px; padding: 10px;">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
