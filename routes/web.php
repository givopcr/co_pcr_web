<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\KunjunganListController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kunjungan', [KunjunganController::class, 'create'])->name('kunjungan.create');
Route::post('/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('/kunjungan-list', [KunjunganListController::class, 'index'])->name('kunjungan-list.index');
Route::get('/kunjungan-list/filter/{status}', [KunjunganListController::class, 'filter'])->name('kunjungan-list.filter');
Route::get('/kunjungan-list/search', [KunjunganListController::class, 'search'])->name('kunjungan-list.search');
Route::delete('/kunjungan/{id}/hapus-foto', [KunjunganListController::class, 'hapusFoto'])->name('kunjungan-list.hapus-foto');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    
    // Redirect root ke home PCR setelah login
    Route::get('/', function () {
        return redirect()->route('home');
    });
    
    // Home PCR
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Kunjungan routes (Form)
    Route::prefix('kunjungan')->name('kunjungan.')->group(function () {
        Route::get('/', [KunjunganController::class, 'create'])->name('create');
        Route::post('/', [KunjunganController::class, 'store'])->name('store');
    });
    
    // Kunjungan list routes (Daftar)
    Route::prefix('kunjungan-list')->name('kunjungan-list.')->group(function () {
        Route::get('/', [KunjunganListController::class, 'index'])->name('index');
        Route::get('/filter/{status}', [KunjunganListController::class, 'filter'])->name('filter');
        Route::get('/search', [KunjunganListController::class, 'search'])->name('search');
        Route::delete('/{id}/hapus-foto', [KunjunganListController::class, 'hapusFoto'])->name('hapus-foto');
    });
    
});