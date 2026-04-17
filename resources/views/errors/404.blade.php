@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
<div class="text-center py-20">
    <h1 class="text-6xl font-bold text-teal-600 mb-4">404</h1>
    <p class="text-xl text-slate-700 mb-6">Halaman yang kamu cari tidak ditemukan.</p>
    <a href="{{ route('home.index') }}" class="inline-block bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-lg transition">
        Kembali ke Beranda
    </a>
</div>
@endsection