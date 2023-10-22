@extends('layout.layout')

@section('content')
<div class="min-vh-100 w-75 m-auto">
    <div class="card text-justify  mt-3">
        <div class="card-header">
            <h4 class=""> BAB 1</h4>
        </div class="card-body  ">
        @foreach ($bab1->latar as $latar)
        <p class="card-text p-3 my-auto">{{ $latar }}</p>
        @endforeach
        <div class="card-footer text-muted">
            <p class="mb-2">Comments</p>
            @if ($bab1->comment)
            @foreach ($bab1->comment as $comment)
            <div class="d-flex justify-content-start align-items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                </div>
                <p class="ml-2 my-2">{{ $comment }}</p>
            </div>
            @endforeach
            @endif
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
@endsection

