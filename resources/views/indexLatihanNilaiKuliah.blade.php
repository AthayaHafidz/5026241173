@extends('template')

@section('title', 'Data Nilai Kuliah')

@section('konten')

    <h2>Data Nilai Kuliah</h2>

    <a href="{{ route('nilaikuliah.tambah') }}">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse ($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NRP }}</td>
                <td>{{ $item->NilaiAngka }}</td>
                <td>{{ $item->SKS }}</td>
                <td>{{ $item->nilaiHuruf }}</td>
                <td>{{ $item->bobot }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
    </table>

@endsection
