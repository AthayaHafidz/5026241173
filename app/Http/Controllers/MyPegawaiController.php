<?php

namespace App\Http\Controllers;

use App\Models\Mypegawai;
use Illuminate\Http\Request;

class MypegawaiController extends Controller
{
    // Halaman Index
    public function index()
    {
        $pegawai = Mypegawai::all();
        return view('mypegawai.index', compact('pegawai'));
    }

    // Halaman Tambah Data (form)
    public function create()
    {
        return view('mypegawai.tambah');
    }

    // Simpan Data Baru
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|alpha_num|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|regex:/^[a-zA-Z\s]+$/|max:50',
            'divisi'      => 'nullable|max:5',
            'departemen'  => 'nullable|max:10',
        ]);

        Mypegawai::create($request->all());

        return redirect()->route('eas')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    // Halaman View 1 Record
    public function show($kodepegawai)
    {
        $pegawai = Mypegawai::findOrFail($kodepegawai);
        return view('mypegawai.view', compact('pegawai'));
    }
}
