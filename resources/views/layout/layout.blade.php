<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light shadow ">
        <div class="w-75 m-auto d-flex align-items-center">
            <img src="/img/Logo.png" width="42" height="42">
            <a class="navbar-brand font-weight-bold pl-2" href="#">
                PRPS
            </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-reset" href="{{route('skripsi.index')}}">Skripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-reset" href="{{route('proposal.index')}}">Proposal</a>
                    </li>
                </ul>
            <a href="" class="text-decoration-none text-reset">Logout</a>
        </div>

    </nav>

    @yield('content')

    <footer class="bg-dark">
        <div class="d-flex w-75 m-auto py-3 text-white align-items-center">
            <h6 class="font-weight-bold">Dikembangkan Oleh Kelompok 2</h6>
        </div>
    </footer>

</body>

</html>