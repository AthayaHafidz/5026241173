@extends('template')

@section('title', 'Latihan Keranjang Belanja')

@section('konten')
    <center>
        <br />
        <br />

        <h1>Daftar Keranjang Belanja</h1>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang </th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($keranjangBelanja as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KodeBarang }}</td>
                    <td>{{ $k->Jumlah }}</td>

                    <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>

                    <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>

                    <td>
                        <a href="/keranjangbelanja/tambah/" class="btn btn-success">Beli</a>
                        <a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach

    </table>
    </center>

@endsection
