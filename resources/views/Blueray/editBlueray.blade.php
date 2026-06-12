@extends('layouts.main')

@section('title', 'Edit Blueray')

@section('konten')
<div class="mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Edit Data Blueray</h4>
        <a href="/blueray" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/blueray/{{ $blueray->kodeblueray }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kodeblueray" class="form-label">Kode Blueray</label>
                    <input type="text" class="form-control" id="kodeblueray"
                        value="{{ $blueray->kodeblueray }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="merkblueray" class="form-label">Merk Blueray</label>
                    <input type="text" class="form-control @error('merkblueray') is-invalid @enderror"
                        id="merkblueray" name="merkblueray"
                        value="{{ old('merkblueray', $blueray->merkblueray) }}"
                        placeholder="Masukkan merk blueray" maxlength="30">
                    @error('merkblueray')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stockblueray" class="form-label">Stock Blueray</label>
                    <input type="number" class="form-control @error('stockblueray') is-invalid @enderror"
                        id="stockblueray" name="stockblueray"
                        value="{{ old('stockblueray', $blueray->stockblueray) }}"
                        placeholder="Masukkan jumlah stock" min="0">
                    @error('stockblueray')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tersedia" class="form-label">Tersedia</label>
                    <select class="form-select @error('tersedia') is-invalid @enderror" id="tersedia" name="tersedia">
                        <option value="">-- Pilih Status --</option>
                        <option value="Y" {{ old('tersedia', $blueray->tersedia) == 'Y' ? 'selected' : '' }}>Ya (Tersedia)</option>
                        <option value="N" {{ old('tersedia', $blueray->tersedia) == 'N' ? 'selected' : '' }}>Tidak (Tidak Tersedia)</option>
                    </select>
                    @error('tersedia')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/blueray" class="btn btn-secondary ms-2">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
