@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">

    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold">Daftar Produk</h1>
            <p class="text-gray-500">Total: {{ $produk->total() }} produk</p>
        </div>

        <div class="flex gap-3 flex-wrap">
            <form class="flex gap-2" method="GET" action="{{ route('produk.index') }}">
                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Cari produk..."
                    class="border rounded-xl px-4 py-2 focus:ring-2 focus:ring-teal-500"
                >
                <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white px-4 py-2 rounded-xl">
                    Cari
                </button>
            </form>

            <a href="{{ route('produk.create') }}"
               class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-xl">
                + Tambah
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($produk as $p)
            <div class="bg-white rounded-2xl shadow p-6">
                <span class="inline-block bg-teal-100 text-teal-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                    {{ $p->kategori ?? 'Umum' }}
                </span>

                <h2 class="text-lg font-bold mt-2 mb-1">{{ $p->nama }}</h2>

                <p class="text-2xl font-bold text-teal-600 mb-2">
                    Rp {{ number_format($p->harga, 0, ',', '.') }}
                </p>

                <p class="text-sm text-gray-500 mb-4">Stok: {{ $p->stok }}</p>

                <div class="flex gap-2 mt-4">
                    <a href="{{ route('produk.show', $p->id) }}"
                       class="flex-1 text-center bg-teal-600 hover:bg-teal-700 text-white py-2 rounded-xl text-sm">
                        Detail
                    </a>

                    <form action="{{ route('produk.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-xl text-sm">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-16">
                <p class="text-gray-500 text-lg">Produk tidak ditemukan.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $produk->withQueryString()->links() }}
    </div>
</div>
@endsection