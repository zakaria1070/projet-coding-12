@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service</h1>
@stop

@section('content')
<div>
    <a class="btn btn-success text-withe" href="/service/create">create</a>
    
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($services as $service)
                <div class="card-body">
                        <div>
                            <p>image: {{$service->img_service}} </p>
                            <p>description: {{$service->description}} </p>
                            <p>titre: {{$service->titre}} </p>
                            <p>titre: {{$service->titre2}} </p>
                            <a class="btn btn-danger" href="/service/{{$service->id}}/destroy">delete</a>
                            <a class="btn btn-warning" href="/service/{{$service->id}}/edit">edit</a>
                        </div><hr>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
@stop