@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Testimonial</h1>
@stop

@section('content')
<div>
    <a class="btn btn-success text-withe" href="/testimonial/create">create</a>
    
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($testimonials as $testimonial)
                <div class="card-body">
                        <div>
                            <p>image: {{$testimonial->img_testimonial}} </p>
                            <p>description: {{$testimonial->description}} </p>
                            <p>lien: {{$testimonial->lien}} </p>
                            <a class="btn btn-danger" href="/testimonial/{{$testimonial->id}}/destroy">delete</a>
                            <a class="btn btn-warning" href="/testimonial/{{$testimonial->id}}/edit">edit</a>
                        </div><hr>
                </div>
                 @endforeach
            </div>
        </div>
    </div>
@stop