@extends('template')

@section('title', 'Tambah Nilai Kuliah')

@section('konten')
    <center>
        <br />
        <br />

        <div class="card">
            <div class="card-header bg-success text-white">
                Form Tambah Nilai Kuliah
            </div>

            <div class="card-body">
                <form action="{{ route('nilaikuliah.simpan') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nrp" id="nrp" class="form-control"
                                placeholder="Masukkan NRP" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
                        <div class="col-sm-10">
                            <input type="number" name="nilaiangka" id="nilaiangka" class="form-control"
                                placeholder="Masukkan Nilai Angka (0-100)" min="0" max="100" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-10">
                            <input type="number" name="sks" id="sks" class="form-control"
                                placeholder="Masukkan SKS" min="1" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-success">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary"> &larr; Kembali</a>
    </center>
@endsection
