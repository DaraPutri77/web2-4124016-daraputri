<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'kategori',
        'deskripsi',
        'foto',
        'aktif',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'aktif' => 'boolean',
        'stok'  => 'integer',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public $timestamps = true;
}