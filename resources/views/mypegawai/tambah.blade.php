@extends('template')
@section('title', 'Tambah Pegawai')
@section('konten')

<div class="jumbotron py-3 mb-4" style="background-color:#e9ecef; border-radius:8px;">
    <h2 class="display-6 fw-bold text-center">Kode Soal mypegawai</h2>
</div>

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
    @csrf

    <p>
        <label>Kode Pegawai</label><br>
        <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai') }}">
    </p>

    <p>
        <label>Nama Lengkap</label><br>
        <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap') }}">
    </p>

    <p>
        <label>Divisi</label><br>
        <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi') }}">
    </p>

    <p>
        <label>Departemen</label><br>
        <input type="text" name="departemen" id="departemen" maxlength="10" value="{{ old('departemen') }}">
    </p>

    <button type="submit">Simpan</button>
    <a href="{{ route('eas') }}">Kembali</a>
</form>

<script>
    function validasiForm() {
        let kode = document.getElementById('kodepegawai').value.trim();
        let nama = document.getElementById('namalengkap').value.trim();
        let reKode = /^[a-zA-Z0-9]+$/;
        let reNama = /^[a-zA-Z\s]+$/;

        if (kode === '') {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "Kode Pegawai wajib diisi!",
                icon: "error"
            });
            return false;
        }

        if (!reKode.test(kode)) {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "Kode Pegawai hanya boleh berisi huruf dan angka!",
                icon: "error"
            });
            return false;
        }

        if (nama === '') {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "Nama Lengkap wajib diisi!",
                icon: "error"
            });
            return false;
        }

        if (!reNama.test(nama)) {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "Nama Lengkap hanya boleh berisi huruf dan spasi!",
                icon: "error"
            });
            return false;
        }

        return true;
    }
</script>

@endsection
