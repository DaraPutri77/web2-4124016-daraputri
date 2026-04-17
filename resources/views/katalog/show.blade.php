@extends('layouts.app')

@section('title', 'Detail Katalog')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow p-8">
    <span class="inline-block bg-slate-100 text-slate-600 text-sm px-3 py-1 rounded-full mb-4">
        {{ $produk['kategori'] }}
    </span>

    <h1 class="text-3xl font-bold mb-4">{{ $produk['nama'] }}</h1>

    <p class="text-teal-600 font-bold text-2xl mb-4">
        Rp {{ number_format($produk['harga'], 0, ',', '.') }}
    </p>

    <p class="text-slate-600 leading-relaxed mb-6">
        {{ $produk['deskripsi'] }}
    </p>

    <a href="{{ route('katalog.index') }}" class="inline-block bg-slate-800 hover:bg-slate-900 text-white px-5 py-3 rounded-lg transition">
        Kembali ke Katalog
    </a>
</div>
@endsection