<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link href="/css/main.css" rel="stylesheet" > -->
</head>

<body class="antialiased">
    <section>
        <div class=" min-vh-100 container overflow-hidden my-5 text-center">
            <div class="row gx-5">
                <div class="col-lg mt-5">
                    <div class=" gambar p-8 mt-5">
                        <img src="/img/Logo.png" alt="" width="280">
                        <h2 class=" mt-5 fw-bold text-center">PRPS </h2>
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="kotak-masuk p-3 mt-5">
                        <main class="form-signin w-100 m-auto">

                            <form class="form-login" action="/login" method="POST" class="text-center mt-5">
                                @csrf 
                                <h1 class=" h3 mb-4 fw-bold">Login ke PRPS</h1>

                                <div class="form-floating mt-5">
                                    <input type="text" class="form-control " name="username" id="username" placeholder="Username" >
                                    <label class="label-nim" for="username">Masukkan NIP/NIM Anda</label>
                                    @error('username')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                                    <label for="password">Masukkan Password Anda</label>
                                    @error('password')
                                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button class="mt-4 w-100 btn btn-lg btn-success rounded-pill border" type="submit">Masuk</button>
                            </form>
                        </main>
                    </div>
                </div>
                <div class="footer-login mt-1">
                </div>
            </div>
        </div>
    </section>

</body>

</html>
