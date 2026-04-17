@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="bg-white rounded-2xl shadow p-8 md:p-12 mb-8">
    <h1 class="text-3xl md:text-4xl font-bold mb-4">Laravel + Blade + Tailwind CSS</h1>
    <p class="text-slate-600 text-lg leading-relaxed mb-6">
        Project latihan Pemrograman Web 2 untuk membangun tampilan web modern dengan Blade Layout dan Tailwind CSS.
    </p>

    <div class="flex flex-wrap gap-3">
        <a href="{{ route('profil.index') }}" class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-3 rounded-lg transition">
            Lihat Profil
        </a>
        <a href="{{ route('katalog.index') }}" class="bg-teal-500 hover:bg-teal-600 text-white px-5 py-3 rounded-lg transition">
            Buka Katalog
        </a>
        <a href="{{ route('produk.index') }}" class="border border-slate-300 hover:bg-slate-50 px-5 py-3 rounded-lg transition">
            Lihat Produk
        </a>
    </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Blade Layout</h2>
        <p class="text-slate-600">Semua halaman memakai layout yang sama agar konsisten dan rapi.</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Tailwind CSS</h2>
        <p class="text-slate-600">Tampilan dibuat modern dengan utility class yang cepat dan fleksibel.</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Responsive UI</h2>
        <p class="text-slate-600">Halaman tetap enak dilihat di mobile maupun desktop.</p>
    </div>
</section>
@endsection