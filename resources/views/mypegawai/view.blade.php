@extends('template')
@section('title', 'Detail Pegawai')
@section('konten')

<div class="jumbotron py-3 mb-4" style="background-color:#e9ecef; border-radius:8px;">
    <h2 class="display-6 fw-bold text-center">Kode Soal mypegawai</h2>
</div>

<p>
    <label>Kode Pegawai</label><br>
    <input type="text" value="{{ $pegawai->kodepegawai }}" readonly>
</p>

<p>
    <label>Nama Lengkap</label><br>
    <input type="text" value="{{ $pegawai->namalengkap }}" readonly>
</p>

<p>
    <label>Divisi</label><br>
    <input type="text" value="{{ $pegawai->divisi ?? '-' }}" readonly>
</p>

<p>
    <label>Departemen</label><br>
    <input type="text" value="{{ $pegawai->departemen ?? '-' }}" readonly>
</p>

<a href="{{ route('eas') }}">Kembali</a>

@endsection
