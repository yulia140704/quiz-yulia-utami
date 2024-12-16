@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 100vh; background-color: #fce4ec; padding-top: 50px; padding-bottom: 50px;">
    <div class="card mx-auto" style="max-width: 1000px; background-color: #f8d7da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: #d81b60;">Daftar Pelanggan</h2>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-danger mb-3" style="background-color: #d81b60; border-color: #d81b60; font-size: 16px; border-radius: 8px; padding: 10px 20px;">Tambah Pelanggan</a>

            @if(session('success'))
                <div class="alert alert-success" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; border-radius: 8px;">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered" style="background-color: #fff; border-radius: 8px; border: 1px solid #f8d7da;">
                <thead class="thead-light" style="background-color: #f8d7da; color: #d81b60;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Pelanggan</th>
                        <th>Alamat</th>
                        <th>HP</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelanggans as $pelanggan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pelanggan->pel_nama }}</td>
                            <td>{{ $pelanggan->pel_no }}</td>
                            <td>{{ $pelanggan->pel_alamat }}</td>
                            <td>{{ $pelanggan->pel_hp }}</td>
                            <td>{{ $pelanggan->pel_aktif }}</td>
                            <td>
                                <a href="{{ route('pelanggan.edit', $pelanggan->pel_id) }}" class="btn btn-warning btn-sm" style="border-radius: 8px;">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $pelanggan->pel_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 8px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
