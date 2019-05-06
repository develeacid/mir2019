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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}','UserController@show')->where('id', '[0-9]+'); //declaracion par que solo reconosca como id a numero enteros

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}',  function ($name , $nickname = null) {
  if ($nickname) {
    Return "Bienvenido {$name}, tu apodo es {$nickname}";
  }else {
    Return "Bienvenido {$name}";
  }
});
