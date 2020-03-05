@extends('admininfo/main')
@section('content')
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <form action="/store" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInput">Pavadinimas</label>
                        <input type="text" name="title" class="form-control" id="exampleInput" placeholder="Įveskite pavadinimą">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@stop