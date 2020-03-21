 @extends('layouts.show')
 @section('content')
 <div class="text-center title">
   <h1>FICHA DE PELÍCULA</h1>
 </div>
 <div class="container">
   <span>
     <?php if ($questRent[0] == true) {
      ?><div class="row justify-content-center">
         <div class="alert alert-info alert-dismissible  text-center fade show" role="alert">
           <strong>Actualizado!</strong> La película está <?php if ($pelicula->rented == 0) {
                                                            echo "disponible para alquiler";
                                                          } else {
                                                            echo "alquilada";
                                                          } ?>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
       </div>
     <?php
      } ?>
   </span>
   <div class="row m-4 mt-5">
     <div class="col-sm-4 text-center">
       <img style="width:250px" src="{{ $pelicula->poster }}">
     </div>
     <div class="col-sm-8">
       <div class="row m-4">
         <h1>{{ $pelicula->title }} - {{ $pelicula->year }}</h1>
       </div>
       <div class="row m-4 ">
         <div class="col-8">
           <h3 class="text-left"> Director: {{ $pelicula->director }}</h3>
         </div>
         <div class="col-4">
           <h3 class="text-right"> <i class="fas fa-star text-warning" style="text-shadow: 0px 0px 5px black"></i> {{ $pelicula->rating }}</h3>
         </div>
       </div>
       <div class="row m-4">
         <p style="text-align: justify;">{{ $pelicula->synopsis }}</p>
       </div>
       <div class="row m-2">
         <div class="col">
           <form action="{{ action('CatalogController@putRented', $pelicula->id) }}" method="POST">
             <input type="hidden" name="_method" value="PUT">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="hidden" name="id" value="{{ $pelicula->id }}">
             <input type="hidden" name="rented" value="{{ $pelicula->rented }}">
             <button class="btn btn-warning w-100 shadow" onclick=""><?php if ($pelicula->rented == 0) {
                                                                        echo "<i class='fas fa-film'></i> Alquilar";
                                                                      } else {
                                                                        echo "<i class='fas fa-undo'></i> Devolver";
                                                                      } ?></button>
           </form>
         </div>
         <div class="col">
           <a href="{{url("/catalog/edit/{$pelicula->id}")}}">
             <button class="btn btn-success w-100 shadow"><i class="fas fa-pencil-alt"></i> Editar película</button>
           </a>
         </div>

         <div class="col">
           <button class="btn btn-danger w-100 shadow" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-times"></i> Eliminar</button>
           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle">Eliminar película</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   ¿Está seguro que desea eliminar la película del catálogo?
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">No eliminarla</button>
                   <form action="{{ action('CatalogController@putDelete', $pelicula->id) }}" method="POST">
                     <input type="hidden" name="_method" value="PUT">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="id" value="{{ $pelicula->id }}">
                     <button type="submit" class="btn btn-primary">Sí, eliminarla</button>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col">
           <a href="{{url("/catalog")}}">
             <button class="btn btn-dark w-100 shadow"><i class="fas fa-chevron-left"></i> Catálogo</button>
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>
 @stop
