<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Tu nombre : </strong>
      {!! Form::text('title', null, ['placeholder'=>'Title','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Comentario Principal : </strong>
      {!! Form::textarea('body', null, ['placeholder'=>'Body','class'=>'form-control','style'=>'height:150px']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('posts.index') }}">Regresar</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Enviar</button>
  </div>
</div>