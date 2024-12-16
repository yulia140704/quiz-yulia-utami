@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3" style="background-color: #f8d7da; height: 100vh;">
            <h3 class="mt-3 text-center" style="color: #a94442;">Dashboard</h3>
            <nav class="nav flex-column mt-4">
                <a class="nav-link" href="{{ route('dashboard') }}" style="color: #a94442;">Dashboard</a>
                <a class="nav-link" href="{{ route('golongan.index') }}" style="color: #a94442;">Golongan</a>
                <a class="nav-link" href="{{ route('users.index') }}" style="color: #a94442;">Users</a>
                <a class="nav-link" href="{{ route('pelanggan.index') }}" style="color: #a94442;">Pelanggan</a>
                
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm w-100">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="container mt-4">
                <h2 class="mb-4">Dashboard</h2>
                
                <!-- Statistik -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3" style="background-color: #fce4ec; border-color: #f8d7da;">
                            <div class="card-header" style="color: #d81b60; background-color: #f8d7da;">Golongan</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $totalGolongan }}</h5>
                                <p class="card-text">Total golongan yang terdaftar.</p>
                                <a href="{{ route('golongan.index') }}" class="btn btn-outline-danger">Lihat Golongan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3" style="background-color: #fce4ec; border-color: #f8d7da;">
                            <div class="card-header" style="color: #d81b60; background-color: #f8d7da;">Users</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $totalUsers }}</h5>
                                <p class="card-text">Total pengguna yang terdaftar.</p>
                                <a href="{{ route('users.index') }}" class="btn btn-outline-danger">Lihat Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3" style="background-color: #fce4ec; border-color: #f8d7da;">
                            <div class="card-header" style="color: #d81b60; background-color: #f8d7da;">Pelanggan</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $totalPelanggan }}</h5>
                                <p class="card-text">Total pelanggan yang terdaftar.</p>
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-danger">Lihat Pelanggan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
