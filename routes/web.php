<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;

Route::view('/', 'home')->name('home.index');

Route::get('/perkenalan', function () {
    return '
        <h1>Halo! Nama saya Dara Putri Nata Sukma</h1>
        <p>NIM: 4124016 | Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
})->name('perkenalan.index');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

Route::view('/tentang', 'tentang')->name('tentang.index');

Route::resource('produk', ProdukController::class);