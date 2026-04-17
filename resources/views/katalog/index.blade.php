@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold">Katalog Produk</h1>
    <p class="text-slate-600 mt-2">Daftar produk dari controller KatalogController.</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($produk as $p)
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition p-6">
            <span class="inline-block bg-slate-100 text-slate-600 text-sm px-3 py-1 rounded-full mb-3">
                {{ $p['kategori'] }}
            </span>

            <h2 class="text-xl font-semibold mb-2">{{ $p['nama'] }}</h2>
            <p class="text-teal-600 font-bold text-2xl mb-4">
                Rp {{ number_format($p['harga'], 0, ',', '.') }}
            </p>

            <a href="{{ route('katalog.show', $p['id']) }}" class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg transition">
                Detail
            </a>
        </div>
    @empty
        <p class="text-slate-500 col-span-3">Belum ada produk.</p>
    @endforelse
</div>
@endsection