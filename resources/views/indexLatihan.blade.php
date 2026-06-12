@extends('template')

@section('title', 'Latihan Keranjang Belanja')

@section('konten')

    <h2>Data Keranjang Belanja</h2>

    <a href="/keranjangbelanja/tambah">Tambah Keranjang</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

        @forelse ($keranjangBelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $k->ID }}"
                       class="btn btn-danger"
                       onclick="return confirm('Yakin ingin membatalkan item ini?')">
                        Batal
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Keranjang belanja masih kosong.</td>
            </tr>
        @endforelse
    </table>

@endsection
