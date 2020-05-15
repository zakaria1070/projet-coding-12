


@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form method="post" action="/service/{{$services->id}}/update">
                        @csrf
                
                        <div class="form-group">
                            <div class="form-group">
                                <label class="mt-5">Titre </label>
                            <input type="text" value="{{$services->titre}}" name="titre" class="form-control" id="" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="mt-5">Description </label>
                                <input type="text" value="{{$services->description}}" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="mt-5">ImageURL</label>
                          <input type="text" value="{{$services->img_service}}" name='img_service' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                
                      </form>
                </div>
            </div>
        </div>
    </div>
@stop