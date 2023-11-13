<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>SITEI | Universitas Riau</title>
    <link rel="shortcut icon" href="https://sitei.ft.unri.ac.id/assets/dist/img/logo.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://sitei.ft.unri.ac.id/assets/css/signin.css" rel="stylesheet">
    <link href="https://sitei.ft.unri.ac.id/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container overflow-hidden text-center">
        <div class="masuk row gx-5">
            <div class="col-lg mt-5">
                <div class=" gambar p-8 mt-5">
                    <img src="https://sitei.ft.unri.ac.id/assets/dist/img/unri.png" alt="" width="280">
                    <h2 class=" mt-5 fw-bold">Sistem Informasi <br>Teknik Elektro dan Informatika</h2>
                </div>
            </div>
            <div class="col mt-5">
                <div class="kotak-masuk p-3 mt-5">
                    <main class="form-signin w-100 m-auto">
                        <form class="form-login" action="/login" method="POST">
                            @csrf
                            <h1 class=" h3 mb-4 fw-bold">Login ke SITEI</h1>
                            <div class="form-floating mt-5">
                                <input type="text" class="form-control " name="username" id="username" value="" placeholder="username" autofocus="" required="">
                                <label class="label-nim" for="username">Masukkan NIP/NIM Anda</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                                <label for="password">Masukkan Password Anda</label>
                            </div>
                            <button class="mt-4 w-100 btn btn-lg btn-success rounded-pill border" type="submit" href="daftarpinjam.html">Masuk</button>
                        </form>
                        <small class=" kecil d-block text-center mt-3">Anda belum memiliki akun?<br><b>Silahkan hubungi Admin Prodi</b></small>
                    </main>
                </div>
            </div>
            <div class="footer-login mt-1">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>