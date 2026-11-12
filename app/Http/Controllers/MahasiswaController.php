<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim'           => 'required|unique:mahasiswas,nim',
            'nama'          => 'required|string|max:255',
            'prodi'         => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required',
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil ditambahkan!');
    }
}