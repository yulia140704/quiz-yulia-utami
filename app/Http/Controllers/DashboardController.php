<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Golongan;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     */
    public function index()
    {
        // Mengambil data untuk statistik
        $totalUsers = User::count();
        $totalPelanggan = Pelanggan::count();
        $totalGolongan = Golongan::count();

        return view('dashboard', compact('totalUsers', 'totalPelanggan', 'totalGolongan'));
    }
}
