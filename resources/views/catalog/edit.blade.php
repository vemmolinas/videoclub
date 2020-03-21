@extends('layouts.init')
@section('content')
<div class="container-fluid ">
  <div class="text-center title text-light" style="text-shadow: 0px 0px 5px black">
    <h1>EDICIÓN DE PELÍCULA</h1>
  </div>
  <div class="row d-flex flex-column justify-items-center align-items-center mt-3">
    <form action="{{ action('CatalogController@putEdit', $pelicula->id) }}" method="POST" class="col-6 p-5  rounded bg-dark">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $pelicula->id }}">
      <div class="form-group" mt-3>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">TITULO</span>
          </div>
          <input type="text" class="form-control" id="title" name="title" required value="{{ $pelicula->title }}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group mt-3 col-12 col-lg-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">DIRECTOR</span>
            </div>
            <input type="text" class="form-control" id="director" name="director" value="{{ $pelicula->director }}" required>
          </div>
        </div>
        <div class="form-group mt-3 col-12 col-lg-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">AÑO</span>
            </div>
            <input type="text" class="form-control" id="year" name="year" value="{{ $pelicula->year }}" required>
          </div>
        </div>
        <div class="form-group mt-3 col-12 col-lg-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">NOTA</span>
            </div>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $pelicula->rating }}" required>
          </div>
        </div>
      </div>
      <div class="form-group mt-3 mb-4">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">POSTER</span>
          </div>
          <input type="text" class="form-control" id="poster" name="poster" value="{{ $pelicula->poster }}" required>
        </div>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="4" id="synopsis" name="synopsis" required>{{ $pelicula->synopsis }}</textarea>
      </div>
      <div class="text-center mt-5">
        <button type="submit" class="btn btn-warning">ACTUALIZAR INFORMACIÓN</button>
      </div>
    </form>
  </div>
</div>

@stop
