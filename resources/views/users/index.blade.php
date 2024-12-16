@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-pink" style="color: #a94442; font-weight: bold;">Data Users</h2>

    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah -->
    <a href="{{ route('users.create') }}" class="btn text-white mb-3" style="background-color: #f4a3c4;">Tambah User</a>

    <!-- Tabel Data -->
    <table class="table table-bordered" style="background-color: #fffafc; border: 1px solid #f8d7da;">
        <thead style="background-color: #f4a3c4; color: white;">
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>HP</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->user_nama }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_pos }}</td>
                <td>{{ $user->user_hp }}</td>
                <td>
                    <span class="badge" style="background-color: {{ $user->user_aktif == 'Y' ? '#82d282' : '#f8d7da' }};">
                        {{ $user->user_aktif == 'Y' ? 'Aktif' : 'Tidak Aktif' }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('users.edit', $user->user_id) }}" class="btn text-white btn-sm" style="background-color: #ffc107;">Edit</a>

                    <!-- Form Hapus -->
                    <form action="{{ route('users.destroy', $user->user_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-white btn-sm" style="background-color: #dc3545;" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
