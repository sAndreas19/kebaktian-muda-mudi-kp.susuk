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

// Placeholder untuk route logout (akan diupdate saat sistem Auth dipasang)
Route::post('/logout', function () {
    return redirect('/');
})->name('logout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('jadwal', \App\Http\Controllers\Admin\JadwalController::class);
    Route::resource('kegiatan', \App\Http\Controllers\Admin\KegiatanController::class);
    Route::resource('renungan', \App\Http\Controllers\Admin\RenunganController::class);
    Route::get('pesan/read', [\App\Http\Controllers\Admin\PesanController::class, 'read'])->name('pesan.read');
    Route::resource('pesan', \App\Http\Controllers\Admin\PesanController::class)->only(['index', 'show', 'destroy']);
});
