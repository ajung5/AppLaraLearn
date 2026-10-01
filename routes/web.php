<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Menampilkan halaman login
Route::get('/', function () {
    return view('login');
})
    ->middleware('guest')
    ->name('login');

// Memproses form login
Route::post('/login', function (Request $request) {
    // Validasi input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    // Coba login menggunakan email + password
    if (Auth::attempt($credentials)) {
        // Membuat ulang session ID untuk keamanan
        $request->session()->regenerate();

        // Jika berhasil, pindah ke halaman info
        return redirect()->route('info');
    }

    // Jika login gagal
    return back()
        ->withErrors([
            'email' => 'Email atau password salah.'
        ])
        ->onlyInput('email');
})
    ->middleware('guest')
    ->name('login.submit');

// Halaman setelah berhasil login
Route::get('/info', function () {
    return view('info');
})
    ->middleware('auth')
    ->name('info');

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
})
    ->middleware('auth')
    ->name('logout');
