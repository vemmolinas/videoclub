<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function getHome()
  {

    $botones = array(
      ['CATALOGO', '/'],
      ['NUEVA PELÍCULA', '/create'],
      ['RANKING PELÍCULAS', '/ranking'],
      ['PELÍCULAS POR AÑO', '/year']
    );

    return view('/home', array('botones' => $botones));
  }
}
