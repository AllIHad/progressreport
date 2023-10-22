@extends('layout.layout')

@section('content')
<section class="min-vh-100 w-75 mx-auto my-5">
    <h4 class="my-4 border-bottom p-2">Proposal</h4>

    <form action="/proposal" method="POST">
        @csrf

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="input-group mb-3 col-lg-12 col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text">Judul</span>
            </div>
            <input type="text" class="form-control" name="judul" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3 col-lg-12 col-md-12">
            <label for="dosen_id">Dosen Pembimbing : </label>
            <select name="dosen_id" id="dosen_id">
                <option value="1">player 1</option>
                <option value="2">player 2</option>
                <option value="3">player 3</option>
                <option value="4">palyer 4</option>
            </select>
        </div>

        <div id="bab1">
            <div class="row justify-content-between">
                <h4 class="mx-3 col-lg-3 col-sm-1">BAB 1</h4>
                <button class="btn btn-light mr-4" type="button" id="add1">+</button>
            </div>

            <div class="form-outline mb-4 mx-3 ">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="latar[]" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="latar[]" rows="4"></textarea>
            </div>
        </div>


        <div id="bab2">
            <div class="row justify-content-between">
                <h4 class="mx-3 col-lg-3 col-sm-1">BAB 2</h4>
                <button class="btn btn-light mr-4" type="button" id="add2">+</button>
            </div>

            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="pustaka[]" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="pustaka[]" rows="4"></textarea>
            </div>
        </div>


        <div id="bab3">
            <div class="row justify-content-between">
                <h4 class="mx-3 col-lg-3 col-sm-1">BAB 3</h4>
                <button class="btn btn-light mr-4" type="button" id="add3">+</button>
            </div>

            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="metode[]" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="meotde[]" rows="4"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-success btn-block mb-4 mx-3">Submit</button>
    </form>

    <script>
        $('#add1').click(function() {
            $('#bab1').append(`
            <div class="form-outline mb-4 mx-3 ">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="latar[]" class="form-control" />
            </div>

            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="latar[]" rows="4"></textarea>
            </div>
        `);
        });

        $('#add2').click(function() {
            $('#bab2').append(`
            <div class="form-outline mb-4 mx-3 ">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="pustaka[]" class="form-control" />
            </div>

            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="pustaka[]" rows="4"></textarea>
            </div>
        `);
        });

        $('#add3').click(function() {
            $('#bab3').append(`
            <div class="form-outline mb-4 mx-3 ">
                <label class="form-label font-weight-bold" for="form6Example7">Sub Judul</label>
                <input type="text" id="form6Example4" name="metode[]" class="form-control" />
            </div>

            <div class="form-outline mb-4 mx-3">
                <label class="form-label font-weight-bold" for="form6Example7">Keterangan</label>
                <textarea class="form-control" id="form6Example7" name="metode[]" rows="4"></textarea>
            </div>
        `);
        });
    </script>

</section>
@endsection
