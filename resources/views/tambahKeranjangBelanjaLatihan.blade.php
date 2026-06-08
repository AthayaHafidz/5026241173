        <!-- Menghubungkan dengan view template master -->
        @extends('template')

        @section('title', 'Tambah Keranjang Belanja')
        <!-- isi bagian konten -->
        <!-- cara penulisan isi section yang panjang -->
        @section('konten')
            <center>


                <br />
                <br />

                <div class="card">
                    <div class="card-header">
                        Form Tambah Keranjang Belanja
                    </div>

                    <div class="card-body">
                        <form action="/keranjangbelanja/store" method="post">
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" name="Harga" id="Harga" class="form-control" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="offset-sm-2 col-sm-10">
                                    <input type="submit" value="Beli" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <br />
                <br />
                <a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>
            </center>
        @endsection
