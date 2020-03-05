@extends('admininfo/main')
@section('content')
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nr.</th>
                        <th scope="col">Užsakymas</th>
                        <th scope="col">Būsena</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($orders as $order)
                        <th scope="row"></th>
                        <td>{{$order->id}}</td>
                        <td>{{$order->ident}}</td>
                        <td>{{$order->progress}}</td>
                            @endforeach
                    </tr>
                    </tbody>
                </table>
                <a href="/neworder" class="btn btn-primary">Pridėti užsakymą</a>
            </div>
        </div>
    </div>
@stop
