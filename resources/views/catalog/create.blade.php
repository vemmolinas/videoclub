@extends('layouts.init')
@section('content')

<div class="container-fluid ">
  <div class="text-center title text-light" style="text-shadow: 0px 0px 5px black">
    <h1>NUEVA PELÍCULA</h1>
  </div>
  <div class="row d-flex flex-column justify-items-center align-items-center mt-3">
    <form action="{{ action('CatalogController@postCreate') }}" method="POST" class="col-6 p-5 rounded bg-dark">
      <input name="_token" value="{!! csrf_token() !!}" type="hidden">
      <div class="form-group  mt-3">
        <div class="input-group ">
          <div class="input-group-prepend ">
            <span class="input-group-text">TITULO</span>
          </div>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group mt-3 col-12 col-lg-6">
          <div class="input-group ">
            <div class="input-group-prepend">
              <span class="input-group-text">DIRECTOR</span>
            </div>
            <input type="text" class="form-control" id="director" name="director" required>
          </div>
        </div>
        <div class="form-group mt-3 col-12 col-lg-3">
          <div class="input-group ">
            <div class="input-group-prepend">
              <span class="input-group-text">AÑO</span>
            </div>
            <input type="text" class="form-control" id="year" name="year" required>
          </div>
        </div>
        <div class="form-group mt-3 col-12 col-lg-3">
          <div class="input-group ">
            <div class="input-group-prepend">
              <span class="input-group-text">NOTA</span>
            </div>
            <input type="text" class="form-control" id="rating" name="rating" required>
          </div>
        </div>
      </div>
      <div class="form-group mt-3 mb-4">
        <div class="input-group ">
          <div class="input-group-prepend">
            <span class="input-group-text">POSTER</span>
          </div>
          <input type="text" class="form-control" id="poster" name="poster" required>
        </div>
      </div>
      <div class="form-group ">
        <textarea class="form-control h-50" id="synopsis" name="synopsis" placeholder="Introduce la sinopsis de la película..." required></textarea>
      </div>
      <div class="text-center mt-5"><button type="submit" class="btn btn-warning">REGISTRAR PELÍCULA</button>
      </div>
    </form>
  </div>
</div>
@stop
