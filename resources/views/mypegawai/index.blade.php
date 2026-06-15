@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

<h2>Kode Soal mypegawai</h2>
<a href="{{ route('eas.tambah') }}">Tambah Data</a>

<br><br>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pegawai as $i => $p)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $p->kodepegawai }}</td>
            <td>{{ $p->namalengkap }}</td>
            <td>{{ $p->divisi ?? '-' }}</td>
            <td>{{ $p->departemen ?? '-' }}</td>
            <td>
                <a href="{{ route('eas.view', $p->kodepegawai) }}">View</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Belum ada data pegawai.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
