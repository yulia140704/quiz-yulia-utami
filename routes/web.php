<?php

use App\Http\Controllers\GolonganController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('golongan', GolonganController::class);

Route::resource('users', UsersController::class);

Route::resource('pelanggan', PelangganController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Login Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');