@extends('layout.layout')

@section('content')
<section class="min-vh-100 w-75 mx-auto my-5">
<h4 class="my-4 border-bottom p-2" >Proposal</h4>
    <div class="row my-5">
        <div class="col-lg-6">
            <form action="/proposal" method="POST">
                @csrf
                <h5 class="d-flex font-weight-bold ">BAB 1</h5>

                    <h6>Latar Belakang</h6>
                        
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bab1[]" id="exampleRadios1" value="selesai" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Selesai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bab1[]" id="exampleRadios1" value="belum" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Belum
                        </label>
                    </div> 
                    <textarea name="bab1[]" class="form-control mb-3" style="height : 140px" placeholder="Keterangan"></textarea>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection