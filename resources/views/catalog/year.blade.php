@extends('layouts.cata')
@section('content')

<body style="background-image: url('https://thumbs.dreamstime.com/b/pantalla-del-cine-con-las-cortinas-y-los-asientos-rojos-34205986.jpg');">
  <div class="text-center title">
    <h1>PELICULAS POR AÑO</h1>
  </div>
  <div class="container-fluid row  justify-content-center">
    <div class="card col-sm-2 m-4 peli border border-dark">
      <h5 class="card-header card-title font-weight-bold text-center">MÁS ANTIGUA</h5>
      <div class="h-75 ">
        <a href="{{ url("/catalog/show/{$antigua[0]->id}") }}">
          <img class="card-img-top h-100" src="{{$antigua[0]->poster }}" alt="">
        </a>
      </div>
      <div class="card-footer d-flex justify-content-center flex-column flex-sm-row justify-content-center mt-auto">
        <a href="{{ url("/catalog/show/{$antigua[0]->id}") }}" class="btn btn-warning">AÑO {{ $antigua[0]->year }}</a>
      </div>
    </div>
    <div class="card col-sm-2 m-4 peli border border-dark">
      <h5 class="card-header card-title font-weight-bold text-center">MÁS NUEVA</h5>
      <div class="h-75 ">
        <a href="{{ url("/catalog/show/{$nueva[0]->id}") }}">
          <img class="card-img-top h-100" src="{{$nueva[0]->poster }}" alt="">
        </a>
      </div>
      <div class="card-footer d-flex justify-content-center flex-column flex-sm-row justify-content-center mt-auto">
        <a href="{{ url("/catalog/show/{$nueva[0]->id}") }}" class="btn btn-warning">AÑO {{ $nueva[0]->year }}</a>
      </div>
    </div>

  </div>
  <div class="container-fluid row  justify-content-center">
    <?php
    foreach ($arrayPeliculas as $arrayPeliculas) {
    ?>
      <div class="peli">
        <a href="{{url("/catalog/show/{$arrayPeliculas->id}")}}" class="btn btn-light border border-dark">
          <h5 class="card-header card-title font-weight-bold text-center">{{ $arrayPeliculas->title }} - {{ $arrayPeliculas->year }}</h5>
          <svg width="1000" height="30">
            <rect width="<?php echo ($arrayPeliculas->year - $antigua[0]->year + 10) * 15 ?> " height="30" style="fill:orange;stroke-width:1;stroke:rgb(0,0,0)" />
          </svg>
        </a>
      </div>
      <br><br><br><br><br><br>
    <?php
    }
    ?>


  </div>

  @stop
