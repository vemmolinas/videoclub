@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      @if (session('status'))
      <div class="card">
        <div class="card-header">MENÚ INICIAL</div>
        <div class="card-body">
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        </div>
      </div>

      @endif
      <ul id="ini" class="navbar-nav m-4">
        <?php
        foreach ($botones as $boton) {
        ?>
          <li class="nav-item active m-4">
            <a href="{{url("/catalog{$boton[1]}")}}" class="btn border-dark justify-content-center" type="submit">{{ $boton[0] }}</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</div>
@endsection
