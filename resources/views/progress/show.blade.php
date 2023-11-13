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
                <h2 class="text-center">{{ $progres->judul }}</h2>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 1
                </div>
                <div class="card-body" class="card-text p-3 my-auto    ">
                    {!! $progres->bab1 !!}
                </div>
            </div>
        </div>
    </div>
    @if(!$progres->bab2)

    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 2
                </div>
                <div class="card-body" class="card-text p-3 my-auto    ">
                    {!! $progres->bab2 !!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progres->bab3)

    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 3
                </div>
                <div class="card-body" class="card-text p-3 my-auto    ">
                    {!! $progres->bab3 !!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!$progres->bab4)

    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 4
                </div>
                <div class="card-body" class="card-text p-3 my-auto    ">
                    {!! $progres->bab4 !!}
                </div>

                
            </div>
        </div>
    </div>
    @endif

    @if(!$progres->bab5)

    @else
    <div class="content ">
        <div class="container">
            <div class="card">

                <div class="card-header bg-dark">
                    BAB 5
                </div>
                <div class="card-body" class="card-text p-3 my-auto    ">
                    {!! $progres->bab5 !!}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection 