<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Dara Putri N. S.";
        $nim = "4124016";
        $prodi = "Sistem Informasi";
        $semester = 4;

        $keahlian = ["HTML", "CSS", "JavaScript", "PHP", "Laravel"];

        return view('profil', compact('nama', 'nim', 'prodi', 'semester', 'keahlian'));
    }

    public function show($nim)
    {
        return "<h1>Profil Mahasiswa</h1>
                <p>NIM: <b>$nim</b></p>";
    }
}