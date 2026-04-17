<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    private function dataProduk(): array
    {
        return [
            [
                'id' => 1,
                'nama' => 'Laptop ASUS ROG',
                'harga' => 15000000,
                'kategori' => 'Elektronik',
                'deskripsi' => 'Laptop gaming dengan performa tinggi untuk multitasking.',
            ],
            [
                'id' => 2,
                'nama' => 'Mouse Logitech G102',
                'harga' => 250000,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Mouse ergonomis untuk penggunaan sehari-hari.',
            ],
            [
                'id' => 3,
                'nama' => 'Keyboard Rexus MX5',
                'harga' => 350000,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Keyboard mechanical dengan pencahayaan RGB.',
            ],
            [
                'id' => 4,
                'nama' => 'Monitor LG 24 Inch',
                'harga' => 2300000,
                'kategori' => 'Elektronik',
                'deskripsi' => 'Monitor full HD yang nyaman untuk belajar dan bekerja.',
            ],
            [
                'id' => 5,
                'nama' => 'Headset Gaming Fantech',
                'harga' => 450000,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Headset dengan mic jernih dan desain nyaman.',
            ],
        ];
    }

    public function index()
    {
        $produk = $this->dataProduk();
        return view('katalog.index', compact('produk'));
    }

    public function show($id)
    {
        $produk = collect($this->dataProduk())->firstWhere('id', (int) $id);

        abort_if(!$produk, 404);

        return view('katalog.show', compact('produk'));
    }
}