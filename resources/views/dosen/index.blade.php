@extends('layout.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div>
                <div class="anak-judul">
                    <h4> Progress Dosen
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


            <ol class="breadcrumb col-lg-12">
                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-black" href="{{ route('dosen.index') }}">Progress</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-item" href="{{ route('dosen.riwayat') }}">Riwayat</a>
                </li>
            </ol>

            <table class="table table-responsive-lg table-bordered table-striped" style="width:100%" id="datatables">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" scope="col">Bimbingan</th>
                        <th class="text-center" scope="col">Progress</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Waktu</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @if(!$progress)
                    <tr>
                        <td class="text-center" colspan="6">No Data Preview</td>
                    </tr>
                    @else
                    @foreach($progress as $progres)
                    <tr>
                        <td class="text-center">{{ $progres->bimbingan }}</td>
                        <td class="text-center">{{ $progres->progress_report }}</td>
                        <td class="text-center">{{ $progres->nama }}</td>
                        <td class="bg-success text-center">{{ $progres->created_at }}</td>
                        <td class="text-center">{{ $progres->status }}</td>
                        <td class="text-center"><a href="/dosen/{{ $progres->id }}">Detail</a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection