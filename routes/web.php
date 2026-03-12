<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Dara Putri N.S</h1>
            <p>NIM: 4124016 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
})->name('perkenalan.index');

Route::get('/perkenalan-nelamaulana', function () {
    return '<h1>Halo! Saya Nelamaulana</h1>
            <p>NIM: (isi NIM teman) | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
})->name('perkenalan.nelamaulana');

Route::get('/tentang', function () {
    return '<h1>Halaman Tentang</h1><p>Ini adalah halaman tentang.</p>';
})->name('page.tentang');

Route::get('/kontak', function () {
    return '<h1>Halaman Kontak</h1><p>Ini adalah halaman kontak.</p>';
})->name('page.kontak');

Route::get('/blog', function () {
    return '<h1>Halaman Blog</h1><p>Coming soon...</p>';
})->name('page.blog');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');