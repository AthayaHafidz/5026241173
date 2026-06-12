<?php

namespace App\Http\Controllers;

use App\Models\NilaiKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // Halaman Index - tampilkan semua data
    public function index()
    {
        $data = NilaiKuliah::all();
        return view('indexLatihanNilaiKuliah', compact('data'));
    }

    // Halaman Tambah Data
    public function tambah()
    {
        return view('tambahNilaiKuliah');
    }

    // Simpan data baru
    public function simpan(Request $request)
    {
        $request->validate([
            'nrp'        => 'required',
            'nilaiangka' => 'required|integer',
            'sks'        => 'required|integer',
        ]);

        NilaiKuliah::create([
            'nrp'        => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks'        => $request->sks,
        ]);

        // Setelah simpan, redirect ke halaman index
        return redirect()->route('nilaikuliah.index');
    }
}
