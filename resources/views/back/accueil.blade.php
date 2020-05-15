@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Accueil</h1>
@stop

@section('content')
<div>
    <a class="btn btn-success text-withe" href="/accueil/create">create</a>
    
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($accueils as $accueil)
                <div class="card-body">
                        <div>
                            <p>image: {{$accueil->img_Accueil}} </p>
                            <p>description: {{$accueil->description}} </p>
                            <p>titre: {{$accueil->titre}} </p>
                            <a class="btn btn-danger" href="/accueil/{{$accueil->id}}/destroy">delete</a>
                            <a class="btn btn-warning" href="/accueil/{{$accueil->id}}/edit">edit</a>
                        </div><hr>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
@stop