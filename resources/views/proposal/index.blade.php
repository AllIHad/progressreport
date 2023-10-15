@extends('layout.layout')

@section('content')
<div class="min-vh-100 w-75 m-auto">
    <h4 class="my-4 border-bottom p-2" >Proposal</h4>
    <div class="row">
        <div class="col-xl-12">
            <div class="data_table">
                <table id="example" class="table table-responsive-lg table-striped table-bordered " width="100%" style="width : 100%;">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">Nim</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Progress</th>
                            <th class="text-center">Pembimbing</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!$data)
                            <tr>
                                <td colspan="6" class="text-center">No Data Preview</td>
                            </tr>
                        
                        @else
                            <tr>
                                <td class="text-center">Nim</td>
                                <td class="text-center">Nim</td>
                                <td class="text-center">Nim</td>
                                <td class="text-center">Nim</td>
                                <td class="text-center">Nim</td>
                                <td class="text-center">Nim</td>
                            </tr>
                        
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection