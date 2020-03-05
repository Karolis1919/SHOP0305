@extends('admininfo/main')
@section('content')
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                @foreach($products as $product)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->entitlement}}</h5>
                        <p class="card-text">{{$product->info}}</p>
                        <p class="card-text">{{$product->quantity}} vienetų</p>
                        <p class="card-text">{{$product->price}}€</p>
                        <a href="/updateproduct{{$product->id}}" class="btn btn-primary">Redaguoti</a>
                        <a href="/delete/product/{{$product->id}}" class="btn btn-primary">Šalinti</a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
@stop
