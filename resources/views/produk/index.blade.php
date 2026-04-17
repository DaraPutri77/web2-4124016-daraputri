@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
    <div>
        <h1 class="text-3xl font-bold">Daftar Produk</h1>
        <p class="text-slate-600 mt-2">Halaman latihan card grid dengan Tailwind CSS.</p>
    </div>

    <a href="{{ route('produk.create') }}" class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-5 py-3 rounded-lg transition">
        + Tambah Produk
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($produk as $p)
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition duration-300 overflow-hidden">
            <div class="p-6">
                <span class="inline-block bg-slate-100 text-slate-600 text-sm px-3 py-1 rounded-full mb-3">
                    {{ $p['kategori'] }}
                </span>

                <h2 class="text-lg font-semibold mb-2">{{ $p['nama'] }}</h2>

                <p class="text-teal-600 font-bold text-xl mb-4">
                    Rp {{ number_format($p['harga'], 0, ',', '.') }}
                </p>

                <a href="{{ route('produk.show', $p['id']) }}" class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg transition">
                    Detail
                </a>
            </div>
        </div>
    @empty
        <p class="text-slate-500 col-span-3">Belum ada produk.</p>
    @endforelse
</div>
@endsection