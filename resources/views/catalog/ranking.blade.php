@extends('layouts.cata')
@section('content')
<div class="text-center title text-light" style="text-shadow: 0px 0px 5px black">
  <h1>RANKING DE PELÍCULAS</h1>
</div>
<div class="row justify-content-center ">
  <?php
  foreach ($arrayPeliculas as $arrayPeliculas) {
  ?>
    <div class="card col-sm-4 col-md-3 col-lg-2 m-4 m-md-3 peli">
      <h5 class="card-header card-title font-weight-bold text-center">{{ $arrayPeliculas->title }}</h5>
      <div class="h-75 ">
        <a href="{{url("/catalog/show/{$arrayPeliculas->id}")}}">
          <img class="card-img-top h-100" src="{{ $arrayPeliculas->poster}}" alt="">
        </a>
      </div>
      <div class="card-footer d-flex justify-content-center flex-column flex-sm-row justify-content-center mt-auto">
        <svg width="200" height="30">
          <rect width="{{floatval($arrayPeliculas->rating)*20}}" height="30" style="fill:yellow;stroke-width:1;stroke:rgb(0,0,0)" />
          <text x="10" y="20" style="font-family: Consolas">Rating: {{ $arrayPeliculas->rating }}</text>
        </svg>
      </div>
    </div>

  <?php
  }
  ?>
</div>


@stop
