<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return "Halo! Nama saya Dara Putri N.S - NIM 4124016 - Prodi Sistem Informasi";
});