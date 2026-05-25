<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Collapse Example</title>
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
    </head>

    <body>

        <div class="container mt-5">
            <h2 class="text-center mb-4">Tugas Week 3 Pemrograman Web</h2>

            <!-- Button -->
            <button class="btn btn-primary mb-2" data-toggle="collapse"
                data-target="#q1">
                Apa itu JavaScript?
            </button>

            <div id="q1" class="collapse">
                <div class="card card-body">
                    JavaScript adalah bahasa pemrograman yang digunakan untuk
                    membuat halaman web menjadi interaktif.
                </div>
            </div>

            <button class="btn btn-success mb-2" data-toggle="collapse"
                data-target="#q2">
                Apa itu Bootstrap?
            </button>

            <div id="q2" class="collapse">
                <div class="card card-body">
                    Bootstrap adalah framework CSS yang memudahkan pembuatan
                    tampilan website yang responsif.
                </div>
            </div>

            <button class="btn btn-warning mb-2" data-toggle="collapse"
                data-target="#q3">
                Apa fungsi Collapse di Bootstrap?
            </button>

            <div id="q3" class="collapse">
                <div class="card card-body">
                    Collapse digunakan untuk menyembunyikan dan menampilkan
                    konten dengan animasi saat tombol ditekan.
                </div>
            </div>

        </div>

    </body>
</html>
