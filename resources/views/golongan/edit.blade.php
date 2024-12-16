@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-pink" style="color: #a94442; font-weight: bold;">Edit Data Golongan</h2>

    <form action="{{ route('golongan.update', $golongan->gol_id) }}" method="POST" style="background-color: #ffe4e9; padding: 20px; border-radius: 10px;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Kode Golongan</label>
            <input type="text" name="gol_kode" class="form-control" value="{{ $golongan->gol_kode }}" style="border: 1px solid #f4a3c4; background-color: #fffafc;" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #a94442;">Nama Golongan</label>
            <input type="text" name="gol_nama" class="form-control" value="{{ $golongan->gol_nama }}" style="border: 1px solid #f4a3c4; background-color: #fffafc;" required>
        </div>
        <button type="submit" class="btn text-white" style="background-color: #f4a3c4;">Update</button>
        <a href="{{ route('golongan.index') }}" class="btn text-white" style="background-color: #f8d7da;">Kembali</a>
    </form>
</div>
@endsection
