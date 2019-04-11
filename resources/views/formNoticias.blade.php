@extends('layout.app') 
@section('content')
 <div class="contener">
    <h1>Noticias</h1>
    {!!Form::open( ['route' =>array('  .make', $ ->id), ' ' =>true]) !!}
    {!! ( )!!}
    <div class="col">
      <div class="form-group">
        <label for="subject">Título de la noticia</label>
        <input name="topic" id="topic" type="text" class="form-control " placeholder="Escriba el título de la noticia">
      </div>
      <div class="from-group">
        <button type="button" class="btn btn-secondary btn-sm">Examinar </button>
      </div>
      <div class="from-group">
        <div>
            <label for="comment">Cuerpo de la noticia</label>
            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control ckeditor"  placeholder="Escriba su noticia"></textarea>
        </div>
      </div>
    </div>
    {!! From::close()!!}
  </div>
@endsection