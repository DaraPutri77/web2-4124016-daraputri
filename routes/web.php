<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Dara Putri N.S</h1>
            <p>NIM: 4124016 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/perkenalan-nelamaulana', function () {
    return '<h1>Halo! Saya Nelamaulana</h1>
            <p>NIM: (isi NIM teman) | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});