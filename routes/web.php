<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\KunjunganListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kunjungan', [KunjunganController::class, 'create'])->name('kunjungan.create');
Route::post('/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('/kunjungan-list', [KunjunganListController::class, 'index'])->name('kunjungan-list.index');
Route::get('/kunjungan-list/filter/{status}', [KunjunganListController::class, 'filter'])->name('kunjungan-list.filter');
Route::get('/kunjungan-list/search', [KunjunganListController::class, 'search'])->name('kunjungan-list.search');