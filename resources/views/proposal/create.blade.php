@extends('layout.layout')

@section('content')
<section class="min-vh-100 w-75 mx-auto my-5">
    <h4 class="my-4 border-bottom p-2">Proposal</h4>

    <form action="/proposal" method="POST">
        @csrf
        <h5 class="d-flex font-weight-bold ">BAB 1</h5>
        <div class="row ">
            <div class="col-6">
                <h6>Latar Belakang</h6>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="latarBelakang[]" id="exampleRadios1" value="selesai" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Selesai
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="latarBelakang[]" id="exampleRadios1" value="belum" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Belum
                    </label>
                </div>
                <textarea name="latarBelakang[]" class="form-control mb-3" style="height : 140px" placeholder="Keterangan"></textarea>
            </div>

            <div class="col-6">
                <h6>Tujuan dan Masalah</h6>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tujuan[]" id="exampleRadios1" value="selesai" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Selesai
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tujuan[]" id="exampleRadios1" value="belum" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Belum
                    </label>
                </div>
                <textarea name="tujuan[]" class="form-control mb-3" style="height : 140px" placeholder="Keterangan"></textarea>
            </div>
        </div>

        <h5 class="d-flex font-weight-bold ">BAB 2</h5>

        <h6>Tinjauan Pustaka</h6>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="pustaka[]" id="exampleRadios1" value="selesai" checked>
            <label class="form-check-label" for="exampleRadios1">
                Selesai
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pustaka[]" id="exampleRadios1" value="belum" checked>
            <label class="form-check-label" for="exampleRadios1">
                Belum
            </label>
        </div>
        <textarea name="pustaka[]" class="form-control mb-3" style="height : 140px" placeholder="Keterangan"></textarea>

        <h5 class="d-flex font-weight-bold ">BAB 3 </h5>

        <h6>Metode Penelitian</h6>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="bab3[]" id="exampleRadios1" value="selesai" checked>
            <label class="form-check-label" for="exampleRadios1">
                Selesai
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bab3[]" id="exampleRadios1" value="belum" checked>
            <label class="form-check-label" for="exampleRadios1">
                Belum
            </label>
        </div>
        <textarea name="bab3[]" class="form-control mb-3" style="height : 140px" placeholder="Keterangan"></textarea>


        <button class="btn btn-success">Submit</button>
    </form>

</section>
@endsection