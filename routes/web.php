<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', 'HomeController@getHome');
  Route::get('/home', 'HomeController@index')->name('home');

  // Route::get('login', function () {
  //   return "Login usuario";
  // });

  // Route::get('logout', function () {
  //   return "Logout usuario";
  // });

  Route::get('catalog', 'CatalogController@getIndex');
  Route::get('catalog/show/{id?}', 'CatalogController@getShow');
  Route::put('catalog/show/{id?}', 'CatalogController@putRented');
  Route::get('catalog/create', 'CatalogController@getCreate');
  Route::post('catalog/create', 'CatalogController@postCreate');
  Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
  Route::put('catalog/edit/{id}', 'CatalogController@putEdit');
  Route::put('catalog', 'CatalogController@putDelete');
  Route::get('catalog/ranking', 'CatalogController@getRanking');
  Route::get('catalog/year', 'CatalogController@getYear');


  Route::put('post/{id}', ['middleware' => 'role:editor', function ($id) {
    //
  }]);



  Route::get('user/{name?}', function ($name = 'Borja') {
    // return "Modificar película: " . $name;
    return view('uno.home', array('nombre' => 'Alberto'));
  })
    ->where('name', '[A-Za-z]+');


  Route::get('user/{id?}/{name}', function ($id = ' ', $name) {
    return "ID: " . $id . "<br>Usuario: " . $name;
  })->where(array('name' => '[A-Za-z]+'));
});
