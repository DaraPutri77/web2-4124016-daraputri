@extends('layouts.app')

@section('title', 'Detail Profil')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow p-8">
    <h1 class="text-3xl font-bold mb-6">Detail Profil Mahasiswa</h1>

    <div class="space-y-3 mb-6">
        <p><span class="font-semibold">Nama:</span> {{ $data['nama'] ?? 'Dara Putri N. S.' }}</p>
        <p><span class="font-semibold">NIM:</span> {{ $data['nim'] ?? '4124016' }}</p>
        <p><span class="font-semibold">Prodi:</span> {{ $data['prodi'] ?? 'Sistem Informasi' }}</p>
        <p><span class="font-semibold">Semester:</span> {{ $data['semester'] ?? '4' }}</p>
    </div>

    <h2 class="text-xl font-semibold mb-3">Keahlian</h2>

    @if(isset($data['keahlian']) && is_array($data['keahlian']))
        <div class="flex flex-wrap gap-2 mb-6">
            @foreach($data['keahlian'] as $item)
                <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">{{ $item }}</span>
            @endforeach
        </div>
    @else
        <div class="flex flex-wrap gap-2 mb-6">
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">HTML</span>
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">CSS</span>
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">JavaScript</span>
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">PHP</span>
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">Laravel</span>
            <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">MySQL</span>
        </div>
    @endif

    <a href="{{ route('profil.index') }}" class="inline-block bg-slate-800 hover:bg-slate-900 text-white px-5 py-3 rounded-lg transition">
        Kembali ke Profil
    </a>
</div>
@endsection