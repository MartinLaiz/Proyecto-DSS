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

use App\Jugador;

Route::get('/', function () {
    return view('index');
});

//Rutas Equipo
Route::get('/home', 'EquipoController@getHome');

//Rutas Jugador
Route::get('/jugadores', 'JugadorController@getJugadores');
Route::get('/jugadores/{id}', 'JugadorController@getJugadoresEquipo');
Route::post('/buscarJugador','JugadorController@buscarJugador');

//Rutas de entrenador
Route::get('/entrenadores', 'EntrenadorController@getEntrenadores');

//Rutas de partido
Route::get('/partidos', 'PartidoController@getPartidos');
Route::post('/formularioPartido/{id}','PartidoController@ModificarPartido');
Route::get('/formularioPartido/{id}','PartidoController@formulario');
Route::get('/formularioPartido/{id}','PartidoController@listarEquipos');

//Rutas configuracion
Route::get('/config','EquipoController@configuracion');
Route::get('/config/crearJugador','JugadorController@formulario');
Route::put('/config/crearJugador','JugadorController@crearJugador');
Route::get('/config/crearEntrenador','EntrenadorController@formulario');
Route::put('/config/crearEntrenador','EntrenadorController@crearEntrenador');
Route::get('/config/editar/jugador/{id}','JugadorController@editar');
Route::get('/config/editar/equipo/{id}','EquipoController@editar');
Route::get('/config/eliminar/partido/{id}','PartidoController@EliminarPartido');
