@extends('layouts.app')

@section('content')
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <h3>COMENTARIOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" href="{{ route('posts.create') }}">Crea uno nuevo</a>
        <a class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" href="inicio">Regresar</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Enviado por</th>
      <th>Comentario</th>
      <th width="300px">Acciones</th>
    </tr>

    @foreach ($posts as $post)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('posts.show', $post->id) }}">Ver</a>
          <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}">Editar</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Borrar',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $posts->links() !!}
  </div>
@endsection