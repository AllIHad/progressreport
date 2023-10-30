@extends('layout.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div>
                <div class="anak-judul">
                    <h4> Form Progress Report</h4>
                    <hr>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">


            <ol class="breadcrumb col-lg-12">
                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-black" href="/seminar">Progress Report</a></li>
            </ol>

            <form action="/progress/proposal" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header bg-dark">
                        Dosen
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-4 col-form-label">Dosen Pembimbing</label>
                                <div class="col-sm-4">
                                    <select class="custom-select" name="dosen_id">
                                        <option selected>Select</option>
                                        <option value="1">Dr. Feri Candra, S.T., M.T.</option>
                                        <option value="2">Edi Susilo, S.Pd., M.Kom., M.Eng.</option>
                                        <option value="3">T. Yudi Hadiwandra, S.Kom., M.Kom.</option>
                                        <option value="4">Dian Ramadhani, S.T., M.T.</option>
                                        <option value="5">Rahmat Rizal Andhi, S.T., M.T.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-dark">
                        BAB 1
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">

                            <div class="form-group row justify-content-center">
                                <label class="col-sm-12">Detail BAB 1</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote" name="latar" placeholder="Detail"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header bg-dark">
                        BAB 2
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">

                            <div class="form-group row justify-content-center">
                                <label  class="col-sm-12">Detail BAB 2</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote2" name="pustaka" placeholder="Detail"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header bg-dark">
                        BAB 3
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">

                            <div class="form-group row justify-content-center">
                                <label class="col-sm-12">Detail BAB 3</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote3" name="metode" placeholder="Detail"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                    <input type="text" class="d-none" name="progress_report" value="Skripsi" >

                <div class="d-flex justify-content-center mb-4">
                    <button type="submit" class="btn btn-success"> Usulkan</button>
                </div>

            </form>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
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

@endsection