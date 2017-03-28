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
    return view('index');
});

Route::get('/home', function(){ return view('home');});

//Route::get('/home', 'EquipoController@getHome');

Route::get('/jugador/{id}', 'JugadorController@perfil');
Route::get('/jugadores', 'JugadorController@getJugadores');

//Rutas de entrenador
Route::get('/entrenador/{$id}', 'EntrenadorController@perfil');
Route::get('/entrenadores', 'EntrenadorController@getEntrenadores');
