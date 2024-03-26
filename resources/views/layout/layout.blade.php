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

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
                <strong>Dikembangkan oleh Mahasiswa</strong>
            </div>
            <!-- Default to the left -->
            <!-- <strong>Copyright &copy; Jurusan Teknik Elektro</strong> -->
        </footer>

    </div>




    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);

        $(document).ready(function() {
            $('#summernote').summernote({
                callbacks: {
                    onImageUpload: function(data) {
                        data.pop();
                    }
                },
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(document).ready(function() {
            $('#summernote2').summernote({
                callbacks: {
                    onImageUpload: function(data) {
                        data.pop();
                    }
                },
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(document).ready(function() {
            $('#summernote3').summernote({
                callbacks: {
                    onImageUpload: function(data) {
                        data.pop();
                    }
                },
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(document).ready(function() {
            $('#summernote4').summernote({
                callbacks: {
                    onImageUpload: function(data) {
                        data.pop();
                    }
                },
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(document).ready(function() {
            $('#summernote5').summernote({
                callbacks: {
                    onImageUpload: function(data) {
                        data.pop();
                    }
                },
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
    <script src="https://sitei.ft.unri.ac.id/assets/plugins/jquery/jquery.min.js"></script>
    <script src="https://sitei.ft.unri.ac.id/assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $('#datatables').DataTable();
    </script>

    <!-- Bootstrap 4 -->
    <script src="https://sitei.ft.unri.ac.id/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://sitei.ft.unri.ac.id/assets/dist/js/adminlte.min.js"></script>
    <script src="https://sitei.ft.unri.ac.id/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://sitei.ft.unri.ac.id/assets/dist/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>