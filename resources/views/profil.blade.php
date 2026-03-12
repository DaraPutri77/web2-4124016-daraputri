<h1>Profil Mahasiswa</h1>

<p><b>Nama:</b> {{ $nama }}</p>
<p><b>NIM:</b> {{ $nim }}</p>
<p><b>Prodi:</b> {{ $prodi }}</p>
<p><b>Semester:</b> {{ $semester }}</p>

<h3>Keahlian</h3>
<ul>
@foreach ($keahlian as $skill)
    <li>{{ $skill }}</li>
@endforeach
</ul>