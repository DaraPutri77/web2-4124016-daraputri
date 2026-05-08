<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::truncate();

        $data = [
            [
                'nama' => 'Laptop ASUS ROG G15',
                'harga' => 15000000,
                'stok' => 5,
                'kategori' => 'Elektronik',
                'deskripsi' => 'Laptop gaming performa tinggi.',
                'foto' => null,
                'aktif' => true,
            ],
            [
                'nama' => 'Mouse Logitech G102',
                'harga' => 250000,
                'stok' => 20,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Mouse ergonomis untuk harian.',
                'foto' => null,
                'aktif' => true,
            ],
            [
                'nama' => 'Keyboard Rexus MX5',
                'harga' => 350000,
                'stok' => 15,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Keyboard mechanical RGB.',
                'foto' => null,
                'aktif' => true,
            ],
            [
                'nama' => 'Monitor Samsung 24 inch',
                'harga' => 2500000,
                'stok' => 8,
                'kategori' => 'Elektronik',
                'deskripsi' => 'Monitor full HD 24 inch.',
                'foto' => null,
                'aktif' => true,
            ],
            [
                'nama' => 'Headset Sony WH-1000XM4',
                'harga' => 3500000,
                'stok' => 3,
                'kategori' => 'Aksesori',
                'deskripsi' => 'Headset premium noise cancelling.',
                'foto' => null,
                'aktif' => false,
            ],
        ];

        foreach ($data as $d) {
            Produk::create($d);
        }
    }
}