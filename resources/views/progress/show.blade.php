@extends('layout.layout')

@section('content')
<div class="content-wrapper ">
    <div class="content-header">
        <div class="container">
            <div>
                <div class="anak-judul">
                    <h4> Detail</h4>
                    <hr>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content ">
        <div class="container ">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 1
                </div class="card-body" <p class="card-text p-3 my-auto">
                </p>

                <div class="card-footer text-muted">
                    <p class="mb-2">Comments</p>

                    <div class="d-flex justify-content-start align-items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>
                        <p class="ml-2 my-2"></p>
                    </div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-outline">
                                    <input type="text" id="typeText" class="form-control" placeholder="Add comment..." />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection