<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

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

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

Route::view('/tentang', 'tentang')->name('tentang.index');

$dataProduk = function () {
    return [
        [
            'id' => 1,
            'nama' => 'Laptop ASUS ROG',
            'harga' => 15000000,
            'kategori' => 'Elektronik',
            'deskripsi' => 'Laptop gaming dengan performa tinggi untuk kerja dan hiburan.',
        ],
        [
            'id' => 2,
            'nama' => 'Mouse Logitech G102',
            'harga' => 250000,
            'kategori' => 'Aksesori',
            'deskripsi' => 'Mouse ringan dan presisi untuk penggunaan harian.',
        ],
        [
            'id' => 3,
            'nama' => 'Keyboard Rexus MX5',
            'harga' => 350000,
            'kategori' => 'Aksesori',
            'deskripsi' => 'Keyboard mechanical nyaman untuk mengetik dan gaming.',
        ],
        [
            'id' => 4,
            'nama' => 'Monitor LG 24 Inch',
            'harga' => 2300000,
            'kategori' => 'Elektronik',
            'deskripsi' => 'Monitor full HD yang cocok untuk belajar dan desain.',
        ],
        [
            'id' => 5,
            'nama' => 'Headset Gaming Fantech',
            'harga' => 450000,
            'kategori' => 'Aksesori',
            'deskripsi' => 'Headset dengan suara jernih dan mic yang nyaman digunakan.',
        ],
    ];
};

Route::get('/produk', function () use ($dataProduk) {
    $produk = $dataProduk();
    return view('produk.index', compact('produk'));
})->name('produk.index');

Route::get('/produk/create', function () {
    return view('produk.create');
})->name('produk.create');

Route::post('/produk', function (Request $request) {
    $request->validate([
        'nama' => 'required|min:3',
        'harga' => 'required|numeric|min:1000',
        'kategori' => 'required',
        'deskripsi' => 'required|min:10',
    ]);

    return redirect()
        ->route('produk.index')
        ->with('success', 'Produk berhasil disimpan. (Simulasi untuk latihan Blade + Tailwind)');
})->name('produk.store');

Route::get('/produk/{id}', function ($id) use ($dataProduk) {
    $produk = collect($dataProduk())->firstWhere('id', (int) $id);

    abort_if(!$produk, 404);

    return view('produk.show', compact('produk'));
})->name('produk.show');