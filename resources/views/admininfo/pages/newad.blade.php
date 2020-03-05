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
                <form method="post" action="/insert">
                    @csrf
                    <div class="form-group">
                        <label for="title">Kategorija</label>
                        <select class="form-control" id="title" name="cat_id" name="cat_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Pavadinimas</label>
                        <input type="text" name="entitlement" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Įveskite pavadinimą">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Aprašymas</label>
                        <textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Kiekis</label>
                        <input type="text" name="quantity" class="form-control" id="exampleInput" placeholder="Įveskite kiekį">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Kaina</label>
                        <input type="text" name="price" class="form-control" id="exampleInput" placeholder="Įveskite kainą">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@stop