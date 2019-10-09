@extends('layouts.comentario')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Mostrar los comentarios</h3> <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Comentario de : </strong>
        {{ $post->title }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Comentario : </strong>
        {{ $post->body }}
      </div>
    </div>
  </div>
  
@endsection