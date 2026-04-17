<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class KatalogController extends Controller
{
    private array $produk = [
        1 => ['id' => 1, 'nama' => 'Keyboard',  'harga' => 150000],
        2 => ['id' => 2, 'nama' => 'Mouse',     'harga' => 80000],
        3 => ['id' => 3, 'nama' => 'Headset',   'harga' => 200000],
        4 => ['id' => 4, 'nama' => 'Flashdisk', 'harga' => 60000],
        5 => ['id' => 5, 'nama' => 'Webcam',    'harga' => 250000],
    ];

    public function index()
    {
        $produk = $this->produk;
        return view('katalog.index', compact('produk'));
    }

    public function show($id)
    {
        $id = (int) $id;

        if (!isset($this->produk[$id])) {
            abort(404, 'Produk tidak ditemukan');
        }

        $produk = $this->produk[$id];
        return view('katalog.show', compact('produk'));
    }
}