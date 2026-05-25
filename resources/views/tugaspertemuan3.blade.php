<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smart Campus Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>

body{
background:#f2f4f8;
font-family:Segoe UI;
}

.hero{
background:linear-gradient(135deg,#007bff,#00c6ff);
color:white;
padding:60px 20px;
text-align:center;
border-radius:10px;
margin-bottom:40px;
}

.service-card{
margin-bottom:20px;
transition:0.3s;
}

.service-card:hover{
transform:scale(1.03);
box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

.btn-service{
width:100%;
}

.footer{
margin-top:50px;
text-align:center;
color:gray;
}

</style>

    </head>

    <body>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SmartCampus</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link"
                            href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="#">Help</a></li>
                </ul>
            </div>
        </nav>

        <div class="container mt-4">

            <!-- HERO -->
            <div class="hero">
                <h1>Smart Campus Portal</h1>
                <p>Akses layanan akademik dengan mudah dan cepat</p>
            </div>

            <div class="row">

                <!-- KRS -->
                <div class="col-md-6">
                    <div class="card service-card">

                        <div class="card-body">

                            <h4>📚 Pengisian KRS</h4>

                            <p>Kelola mata kuliah yang akan diambil pada
                                semester ini.</p>

                            <button class="btn btn-primary btn-service"
                                data-toggle="collapse" data-target="#krs">
                                Lihat Detail
                            </button>

                            <div id="krs" class="collapse mt-3">
                                <ul>
                                    <li>Pilih mata kuliah sesuai kurikulum</li>
                                    <li>Konsultasi dengan dosen wali</li>
                                    <li>Submit sebelum batas waktu</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- BEASISWA -->
                <div class="col-md-6">
                    <div class="card service-card">

                        <div class="card-body">

                            <h4>🎓 Informasi Beasiswa</h4>

                            <p>Temukan berbagai program beasiswa untuk
                                mahasiswa.</p>

                            <button class="btn btn-success btn-service"
                                data-toggle="collapse" data-target="#beasiswa">
                                Lihat Detail
                            </button>

                            <div id="beasiswa" class="collapse mt-3">
                                <ul>
                                    <li>Beasiswa Prestasi Akademik</li>
                                    <li>Beasiswa Bantuan Finansial</li>
                                    <li>Beasiswa Mitra Industri</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- MAGANG -->
                <div class="col-md-6">
                    <div class="card service-card">

                        <div class="card-body">

                            <h4>💼 Program Magang</h4>

                            <p>Dapatkan pengalaman kerja sebelum lulus.</p>

                            <button class="btn btn-warning btn-service"
                                data-toggle="collapse" data-target="#magang">
                                Lihat Detail
                            </button>

                            <div id="magang" class="collapse mt-3">
                                <p>Program magang tersedia di berbagai
                                    perusahaan partner universitas dengan durasi
                                    3–6 bulan.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- KONSELING -->
                <div class="col-md-6">
                    <div class="card service-card">

                        <div class="card-body">

                            <h4>🧑‍🏫 Konsultasi Akademik</h4>

                            <p>Diskusikan perencanaan studi dengan dosen
                                pembimbing.</p>

                            <button class="btn btn-info btn-service"
                                data-toggle="collapse" data-target="#konsul">
                                Lihat Detail
                            </button>

                            <div id="konsul" class="collapse mt-3">
                                <p>Mahasiswa dapat membuat janji konsultasi
                                    untuk membahas perencanaan studi, skripsi,
                                    atau masalah akademik.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="footer">
                <p>© 2026 Smart Campus Portal</p>
            </div>

        </div>

    </body>
</html>
