<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('user_email', $request->email)->first();

        if ($user && \Hash::check($request->password, $user->user_password)) {
            Auth::login($user);  // Autentikasi pengguna
            return redirect()->route('home');  // Arahkan ke halaman beranda setelah login
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');  // Redirect ke halaman login setelah logout
    }
}

