@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Tambah Produk</h1>

    <form method="POST" action="{{ route('produk.store') }}" class="bg-white rounded-xl shadow p-8 space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Produk</label>
            <input
                type="text"
                name="nama"
                value="{{ old('nama') }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                placeholder="Masukkan nama produk"
            >
            @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Harga</label>
            <input
                type="number"
                name="harga"
                value="{{ old('harga') }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                placeholder="Masukkan harga"
            >
            @error('harga')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
            <input
                type="text"
                name="kategori"
                value="{{ old('kategori') }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                placeholder="Masukkan kategori"
            >
            @error('kategori')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
            <textarea
                name="deskripsi"
                rows="4"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                placeholder="Masukkan deskripsi produk"
            >{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg transition">
            Simpan Produk
        </button>
    </form>
</div>
@endsection