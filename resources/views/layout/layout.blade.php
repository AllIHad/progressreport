<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Progress Report | SIA ELEKTRO
    </title>
    <link rel="shortcut icon" href="https://sitei.ft.unri.ac.id/assets/dist/img/logo.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/cloudme.fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/assets/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/assets/css/styles.css?v=0.001">
    <link rel="stylesheet" href="https://sitei.ft.unri.ac.id/assets/dataTables/datatables.min.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <div class="atas">
            <nav class="navbar navbar-expand-lg main-header fixed-top bayangan">
                <div class="container judul">
                    <div class="sia-jte">
                        <a>
                            <img src="/img/Logo.png" alt="" width="30" height="30" class="d-inline-block mr-2">
                        </a>
                        <a class="navbar-brand mt-1 " href="{{ route('progress.index') }}">SITEI

                        </a>
                    </div>
                    <button class="navbar-toggler navbar-light bg-light border border-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Progress Report</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown baru">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div>
                                    <ul class="dropdown-menu dropdown-menu-end" style="border-radius:10px;" aria-labelledby="navbarDropdown">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <li>
                                                <button type="submit" class="dropdown-item mb-1">
                                                    <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                                                </button>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>

        @yield('content')

        <footer class="main-footer bg-dark">
            <div class="container">
                <strong>Dikembangkan oleh Prodi Teknik Informatika UNRI (Fahril Hadi & Rahul Ilsa Tajri Mukhti)</strong>
            </div>
            <!-- Default to the left -->
            <!-- <strong>Copyright &copy; Jurusan Teknik Elektro</strong> -->
        </footer>

    </div>

    @yield('script')

</body>

</html>