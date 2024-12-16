@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-pink" style="color: #a94442; font-weight: bold;">Data Golongan</h2>

    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success" style="background-color: #f8d7da; color: #a94442; border-color: #f5c6cb;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah -->
    <a href="{{ route('golongan.create') }}" class="btn text-white mb-3" style="background-color: #f4a3c4;">Tambah Golongan</a>

    <!-- Tabel Data -->
    <table class="table table-bordered" style="background-color: #ffe4e9; color: #a94442;">
        <thead class="text-white" style="background-color: #f4a3c4;">
            <tr>
                <th>No</th>
                <th>Kode Golongan</th>
                <th>Nama Golongan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($golongan as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->gol_kode }}</td>
                <td>{{ $item->gol_nama }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('golongan.edit', $item->id ?? $item->gol_id) }}" 
                       class="btn btn-warning btn-sm text-white" 
                       style="background-color: #f6c5d0; border: none;">
                       Edit
                    </a>

                    <!-- Form Hapus -->
                    <form action="{{ route('golongan.destroy', $item->id ?? $item->gol_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="btn btn-danger btn-sm text-white" 
                                style="background-color: #f8d7da; border: none;" 
                                onclick="return confirm('Yakin ingin menghapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
