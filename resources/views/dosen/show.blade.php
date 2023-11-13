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
                <h2 class="text-center"></h2>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @if(!$progress->bab3)
    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 1
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    {!!$progress->bab1!!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progress->bab3)
    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 2
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    {!!$progress->bab2!!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progress->bab3)
    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 3
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    {!!$progress->bab3!!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progress->bab4)
    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 4
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    {!!$progress->bab4!!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progress->bab5)
    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 5
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    {!!$progress->bab5!!}
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    Comment
                </div>
                <div class="card-body" class="card-text p-3 my-auto">
                    @if(!$progress->comments)
                    @else

          
                    <div class="d-flex ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>
                        <p class="ml-2 my-2">{!!$progress->comments!!}</p>
                    </div>
                    

                    @endif
                    <form action="/dosen/comment/{{$progress->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-outline">
                                    <textarea class="form-control" id="summernote" name="comments[]" placeholder="Add Comment..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-success">Add comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center gap-5 mb-4">

        <form action="/dosen/revisi/{{ $progress->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <button type="submit" class="btn btn-primary"> Revisi</button>
            </div>
        </form>

        <form action="/dosen/tolak/{{ $progress->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <button type="submit" class="btn btn-danger"> Tolak</button>
            </div>
        </form>

        <form action="/dosen/selesai/{{ $progress->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <button type="submit" class="btn btn-success"> Selesai</button>
            </div>
        </form>

    </div>
</div>
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
</script>

@endsection