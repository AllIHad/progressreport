<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SITEI | Daftar Sidang Skripsi
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css?v=0.001">
    <!--<link rel="stylesheet" href="http://127.0.0.1:8000/assets/dataTables/datatables.min.css">-->

    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/9c94b38548.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function mousedwn(e) {
            try {
                if (event.button == 2 || event.button == 3) return false
            } catch (e) {
                if (e.which == 3) return false
            }
        }
        document.oncontextmenu = function() {
            return false
        };
        document.ondragstart = function() {
            return false
        };
        document.onmousedown = mousedwn
    </script>


</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <div class="atas">
            <nav class="navbar navbar-expand-lg main-header fixed-top bayangan">
                <div class="container judul">
                    <div class="sia-jte">
                        <a>
                            <img src="/assets/dist/img/unri.png" alt="" width="30" height="30" class="d-inline-block mr-2">
                        </a>
                        <a class="navbar-brand mt-1 " href="/">SITEI
                        </a>
                    </div>
                    <button class="navbar-toggler navbar-light bg-light border border-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">


                            <li class="nav-item">
                                <a class="nav-link  " aria-current="page" href="/inventaris/peminjaman-dosen">Progress Report</a>

                            </li>

                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div>
                                    <ul class="dropdown-menu dropdown-menu-end" style="border-radius:10px;" aria-labelledby="navbarDropdown">

                                        <li>
                                            <a class="nav-link dropdown-item " href="/profil-dosen/editpassworddsn/">
                                                <i class="bi bipw bi-key"></i> Ubah Password
                                            </a>
                                        </li>

                                        <form action="/logout" method="POST">
                                            <input type="hidden" name="_token" value="1kf09BSG9Hzwus1sOH2nUzbqaEWfNVVz6tdaH9nz">
                                            <li>
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bi bi-box-arrow-right"></i> <span>Keluar</span>
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div>
                        <div class="anak-judul">
                            <h4> Form Usulan Progress
                            </h4>
                            <hr>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="container">
                        <a href="{{ url()->previous() }}" class="btn btn-success py-1 px-2 mb-4"><i class="fas fa-arrow-left fa-xs"></i> Kembali
                            <a>
                    </div>
                    @if($proposal)
                    <form action="/progress/proposalupdate" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="/progress/proposal" method="POST" enctype="multipart/form-data">
                        @csrf
                    @endif
                            <div class="row">

                                <div class="col-lg-6 col-md-12">


                                    <div class="mb-3 field">
                                        <label class="form-label pb-0">Bimbingan Ke</label>
                                        <input type="int" name="bimbingan_ke" class="form-control" value="{{ $bimbingan_ke }}" readonly>
                                    </div>

                                    <div class="mb-3 field">
                                        <label class="form-label pb-0">Diskusi</label>
                                        <input type="text" name="diskusi" class="form-control ">
                                    </div>

                                    <div class="mb-3 field">
                                        <label for="formFile" class="form-label float-start">File Proposal <small class="text-secondary">(Format .pdf | Maks. 5 MB) </small></label>
                                        <input name="naskah" class="form-control " type="file" id="formFile">
                                        @error('naskah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 field">

                                        <label class="form-label ">BAB 1</label> <br />
                                        <div class="form-check">

                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Latar Belakang">Latar Belakang <br />
                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Perumusan Masalah">Perumusan Masalah <br />
                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Tujuan Penelitian">Tujuan Penelitian <br />
                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Batasan Masalah">Batasan Masalah <br />
                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Manfaat Penelitian">Manfaat Penelitian <br />
                                            <input type="checkbox" class="form-check-input " name="bab1[]" value="Sistematika Penelitian">Sistematika Penelitan <br />
                                        </div>
                                    </div>

                                    <div class="mb-3 field">

                                        <label class="form-label ">BAB 2</label> <br />
                                        <div class="form-check">

                                            <input type="checkbox" class="form-check-input " name="bab2[]" value="Penelitian Terdahulu">Penelitian Terdahulu <br />
                                            <input type="checkbox" class="form-check-input " name="bab2[]" value="Teori Pendukung">Teori Pendukung <br />
                                        </div>
                                    </div>

                                    <div class="mb-3 field">

                                        <label class="form-label ">BAB 3</label> <br />
                                        <div class="form-check">

                                            <input type="checkbox" class="form-check-input " name="bab3[]" value="Metode Penelitian">Metode Penelitian <br />
                                            <input type="checkbox" class="form-check-input " name="bab3[]" value="Metode Pengembangan">Metode Pengembangan <br />
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <a href="#ModalApprove" data-toggle="modal" class="btn mt-4 btn-lg btn-success ">Usulkan Progress</a>
                            <div class="modal fade" id="ModalApprove">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content shadow-sm">
                                        <div class="modal-body">
                                            <div class="container px-5 pt-5 pb-2">
                                                <h3 class="text-center">Apakah Anda Yakin?</h3>
                                                <p class="text-center">Jika belum, silahkan cek kembali Data yang akan Anda Kirim.</p>
                                                <div class="row text-center">
                                                    <div class="col-3">
                                                    </div>
                                                    <div class="col-3">
                                                        <button type="button" class="btn p-2 px-3 btn-secondary" data-dismiss="modal">Tidak</button>
                                                    </div>
                                                    <div class="col-3">
                                                        <button type="submit" class="btn btn-success py-2 px-3">Kirim</button>
                                                    </div>
                                                    <div class="col-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->

        <section class="bg-dark p-1">
            <div class="container">
                <p class="developer">Dikembangkan oleh Prodi Teknik Informatika UNRI <a class="text-success fw-bold" formtarget="_blank" target="_blank" href="/developer/m-seprinaldi">( M. Seprinaldi )</a></p>
            </div>
        </section>
        <!-- <div class="footer bg-dark">
        <div class="container">
          <p class="developer">Dikembangkan oleh Prodi Teknik Informatika UNRI</p>
        </div>
      </div> -->


        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->


        <!-- jQuery -->
        <!--<script src="http://127.0.0.1:8000/assets/plugins/jquery/jquery.min.js"></script>-->
        <!--<script src="http://127.0.0.1:8000/assets/dataTables/datatables.min.js"></script>-->


        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.4.0/js/dataTables.rowGroup.min.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#datatables').DataTable({
                    "lengthMenu": [10, 25, 50, 100, 200],
                    "language": {
                        "sProcessing": "Sedang memproses...",
                        "sLengthMenu": "Tampilkan _MENU_ entri",
                        "sZeroRecords": "Tidak ditemukan data yang sesuai",
                        "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix": "",
                        "sSearch": "Cari:",
                        "sUrl": "",
                        "oPaginate": {
                            "sFirst": "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext": "Selanjutnya",
                            "sLast": "Terakhir"
                        }
                    }
                })
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#datatables3').DataTable({
                    "lengthMenu": [10, 25, 50, 100, 200],
                    "language": {
                        "sProcessing": "Sedang memproses...",
                        "sLengthMenu": "Tampilkan _MENU_ entri",
                        "sZeroRecords": "Tidak ditemukan data yang sesuai",
                        "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix": "",
                        "sSearch": "Cari:",
                        "sUrl": "",
                        "oPaginate": {
                            "sFirst": "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext": "Selanjutnya",
                            "sLast": "Terakhir"
                        }
                    }
                })
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#datatables2').DataTable({
                    "lengthMenu": [50, 100, 150, 200],
                    "language": {
                        "sProcessing": "Sedang memproses...",
                        "sLengthMenu": "Tampilkan _MENU_ entri",
                        "sZeroRecords": "Tidak ditemukan data yang sesuai",
                        "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                        "sInfoPostFix": "",
                        "sSearch": "Cari:",
                        "sUrl": "",
                        "oPaginate": {
                            "sFirst": "Pertama",
                            "sPrevious": "Sebelumnya",
                            "sNext": "Selanjutnya",
                            "sLast": "Terakhir"
                        }
                    }
                })
            });
        </script>



        <!-- Bootstrap 4 -->
        <script src="http://127.0.0.1:8000/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="http://127.0.0.1:8000/assets/dist/js/adminlte.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/dist/js/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="http://127.0.0.1:8000/js/sweetalert2.min.js"></script>

</body>

</html>