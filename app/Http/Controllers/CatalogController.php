<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

  public function getIndex()
  {
    $arrayPeliculas = DB::table('movies')->get();
    // $arrayPeliculas = Movie::all();
    return view('catalog.index', array('arrayPeliculas' => $arrayPeliculas));
    // return view('catalog.show', array('arrayPeliculas' => $this->arrayPeliculas));
  }


  public function getRanking()
  {
    $arrayPeliculas = DB::table('movies')->orderBy('rating', 'desc')->get();
    return view('catalog.ranking', array('arrayPeliculas' => $arrayPeliculas));
  }

  public function getYear()
  {
    $arrayPeliculas = DB::table('movies')->orderBy('year', 'asc')->get();
    $antigua = DB::select('select * from movies where year = (select min(year) from movies )');
    $nueva = DB::select('select * from movies where year = (select max(year) from movies )');



    // return view('catalog.year', array('antigua' => $antigua));
    return view('catalog.year', array('arrayPeliculas' => $arrayPeliculas, 'antigua' => $antigua, 'nueva' => $nueva));
  }



  public function getShow($id)
  {
    $pelicula = DB::table('movies')->where('id', '=', $id)->first();
    $questRent[0] = false;
    // $pelicula = Movie::where('id', '=', $id)->first();
    // $pelicula = Movie::find($id);
    return view('catalog.show', array('pelicula' => $pelicula, 'questRent' => $questRent));
  }
  public function getCreate()
  {
    return view('catalog.create');
  }

  public function putRented(Request $request)
  {
    $id = $request->input('id');
    $rented = $request->input('rented');

    if ($rented == 0) {
      $rent = 1;
    } else {
      $rent = 0;
    }
    $questRent[0] = true;
    $pelicula = DB::table('movies')->where('id', '=', $id)
      ->update(array('rented' => $rent));

    $pelicula = DB::table('movies')->where('id', '=', $id)->first();
    return view('catalog.show', array('pelicula' => $pelicula, 'questRent' => $questRent));
  }


  public function postCreate(Request $request)
  {
    $pelicula = DB::table('movies')->insert(array(
      'title' => $request->input('title'),
      'year' => $request->input('year'),
      'rating' => $request->input('rating'),
      'director' => $request->input('director'),
      'poster' => $request->input('poster'),
      'synopsis' => $request->input('synopsis'),
      "created_at" =>  date('Y-m-d H:i:s'),
      "updated_at" => date('Y-m-d H:i:s')
    ));
    $pelicula = DB::table('movies')->where('title', '=', $request->input('title'))->first();
    $questRent[0] = false;
    // return redirect()->action('CatalogController@getIndex');
    return view('catalog.show', array('pelicula' => $pelicula, 'questRent' => $questRent));
  }

  public function getEdit($id)
  {
    $pelicula = DB::table('movies')->where('id', '=', $id)->first();
    return view('catalog.edit', array('pelicula' => $pelicula));
  }

  public function putEdit(Request $request)
  {
    $id = $request->input('id');
    $pelicula = DB::table('movies')->where('id', '=', $id)
      ->update(array(
        'title' => $request->input('title'),
        'year' => $request->input('year'),
        'rating' => $request->input('rating'),
        'director' => $request->input('director'),
        'poster' => $request->input('poster'),
        'synopsis' => $request->input('synopsis'),
        "updated_at" => date('Y-m-d H:i:s')
      ));
    $pelicula = DB::table('movies')->where('id', '=', $id)->first();
    $questRent[0] = false;
    // return redirect()->action('CatalogController@getIndex');
    return view('catalog.show', array('pelicula' => $pelicula, 'questRent' => $questRent));
  }


  public function putDelete(Request $request)
  {
    $id = $request->input('id');
    DB::table('movies')->where('id', '=', $id)->delete();

    $arrayPeliculas = DB::table('movies')->get();
    // var_dump($arrayPeliculas);
    // die();
    return view('catalog.index', array('arrayPeliculas' => $arrayPeliculas));
  }
}
