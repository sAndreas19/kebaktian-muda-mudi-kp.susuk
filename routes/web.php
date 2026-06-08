<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/{id}', [JadwalController::class, 'show'])->name('jadwal.show');
Route::get('/renungan', [RenunganController::class, 'index'])->name('renungan.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
