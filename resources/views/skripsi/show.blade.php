@extends('layout.layout')

@section('content')
<section class="min-vh-100">
    <div>
        @foreach ($bab1->latar_belakang as $latarbelakang)
        <p>{{$latarbelakang}}</p>
        @endforeach
    </div>
    <div>
        @foreach ($bab1->tujuan as $tujuan)
        <p>{{$tujuan}}</p>
        @endforeach
    </div>
    <div>
        @foreach ($bab1->masalah as $masalah)
        <p>{{$masalah}}</p>
        @endforeach
    </div>
    <div>
        @foreach ($bab2->tinjauan_pustaka as $tinjauan)
        <p>{{$tinjauan}}</p>
        @endforeach
    </div>
    <div>
        @foreach ($bab3->metode as $metode)
        <p>{{$metode}}</p>
        @endforeach
    </div>
    
</section>
@endsection