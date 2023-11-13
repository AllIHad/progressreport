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
                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-black" href="{{ route('progress.index') }}">Progress Report</a></li>
            </ol>

            <form action="/progress/skripsi" method="POST">
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
                                        <option value="{{ $dosen->name }}">{{ $dosen->name }}</option>
                                    </select>
                                </div>
                            </div>
                            @error('dosen_id')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
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
                                    <textarea class="form-control" id="summernote" name="bab1" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            @error('latar')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
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
                                <label class="col-sm-12">Detail BAB 2</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote2" name="bab2" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            @error('pustaka')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
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
                                    <textarea class="form-control" id="summernote3" name="bab3" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            @error('metode')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header bg-dark">
                        BAB 4
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-12">Detail BAB 4</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote4" name="bab4" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            @error('metode')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header bg-dark">
                        BAB 5
                    </div>
                    <div class="card-body">
                        <div class="mx-auto">
                            <div class="form-group row justify-content-center">
                                <label class="col-sm-12">Detail BAB 5</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="summernote5" name="bab5" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            @error('metode')
                            <span class="d-flex justify-content-center fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

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

@endsection