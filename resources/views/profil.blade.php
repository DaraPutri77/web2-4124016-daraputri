@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="bg-white rounded-2xl shadow p-8">
    <h1 class="text-3xl font-bold mb-6">Profil Mahasiswa</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-3">
            <p><span class="font-semibold">Nama:</span> Dara Putri N. S.</p>
            <p><span class="font-semibold">NIM:</span> 4124016</p>
            <p><span class="font-semibold">Prodi:</span> Sistem Informasi</p>
            <p><span class="font-semibold">Semester:</span> 4</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-3">Keahlian</h2>
            <ul class="list-disc pl-5 space-y-1">
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>MySQL</li>
            </ul>
        </div>
    </div>
</div>
@endsection