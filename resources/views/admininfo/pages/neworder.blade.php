@extends('admininfo/main')
@section('content')
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="/add">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInput">Pavadinimas</label>
                        <input type="text" name="ident" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Koks užsakymas?">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Būsena</label>
                        <input type="text" name="progress" class="form-control" id="exampleInput" placeholder="Statusas">
                    </div>
                    <a href="/orders" class="btn btn-primary">Pridėti</a>
                </form>
            </div>
        </div>
    </div>
@stop
