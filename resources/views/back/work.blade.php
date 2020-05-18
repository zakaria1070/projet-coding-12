@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">work</h1>
@stop

@section('content')
<div>
    <a class="btn btn-success text-withe" href="/work/create">create</a>
    
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($works as $work)
                <div class="card-body">
                        <div>
                            <p>image: {{$work->img_work}} </p>
                            <p>description: {{$work->description}} </p>
                            <p>titre: {{$work->titre}} </p>
                            <p>date: {{$work->date}} </p>
                            <a class="btn btn-danger" href="/work/{{$work->id}}/destroy">delete</a>
                            <a class="btn btn-warning" href="/work/{{$work->id}}/edit">edit</a>
                        </div><hr>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
@stop