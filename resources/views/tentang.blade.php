@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="bg-white rounded-2xl shadow p-8 md:p-12 mb-8 text-center">
    <h1 class="text-3xl md:text-4xl font-bold mb-4">Tentang Project Web2 App</h1>
    <p class="text-slate-600 text-lg max-w-3xl mx-auto">
        Project ini dibuat untuk latihan Laravel, Blade Template, dan Tailwind CSS pada mata kuliah Pemrograman Web 2.
    </p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Laravel</h2>
        <p class="text-slate-600">Framework PHP modern untuk membangun aplikasi web yang rapi dan terstruktur.</p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Blade</h2>
        <p class="text-slate-600">Template engine bawaan Laravel yang memudahkan pembuatan view reusable.</p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-2">Tailwind CSS</h2>
        <p class="text-slate-600">Framework utility-first untuk membuat UI modern, cepat, dan responsif.</p>
    </div>
</section>
@endsection