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
Route::get('/equipo/{id}','EquipoController@getEquipo');

//Rutas Jugador
Route::get('/jugadores', 'JugadorController@getJugadores');
Route::get('/jugadores/{id}', 'JugadorController@getJugadoresEquipo');
Route::get('/jugador/{id}', 'JugadorController@getJugador');
Route::post('/buscarJugador','JugadorController@buscarJugador');

//Rutas de entrenador
Route::get('/entrenadores', 'EntrenadorController@getEntrenadores');

//Rutas de partido
Route::get('/partidos', 'PartidoController@getPartidos');

//Rutas configuracion
Route::get('/config','EquipoController@configuracion');

Route::get('/config/crear/jugador','JugadorController@formulario');
Route::post('/config/crear/jugador','JugadorController@crearJugador');

Route::get('/config/crear/entrenador','EntrenadorController@formulario');
Route::put('/config/crear/entrenador','EntrenadorController@crearEntrenador');

Route::get('/config/crear/equipo','EquipoController@formulario');
Route::post('/config/crear/equipo','EquipoController@crearEquipo');


Route::get('/config/editar/jugadores','JugadorController@editar');
Route::get('/config/editar/jugadores/{id}','JugadorController@editarJugadoresEquipo');
Route::get('/config/editar/jugador/{id}','JugadorController@editarJugador');
Route::post('/config/editar/jugador/{id}','JugadorController@editarJugadorPost');

Route::get('/config/editar/equipos','EquipoController@editar');
Route::get('/config/editar/equipo/{id}','EquipoController@modificarEquipo');
Route::post('/config/editar/equipo/{id}','EquipoController@modificarEquipoPost');

Route::get('/config/editar/entrenador/{id}','EntrenadorController@formularioModificar');
Route::put('/config/editar/entrenador/{id}','EntrenadorController@modificarEntrenador');

Route::get('/config/eliminar/partido/{id}','PartidoController@EliminarPartido');
Route::get('/config/eliminar/jugador/{id}','JugadorController@eliminar');
Route::get('/config/eliminar/jugador/{id}','EquipoController@eliminar');
Route::get('/config/eliminar/entrenador/{id}','EntrenadorController@borrarEntrenador');

//configuracion partidos
Route::get('config/partidos', 'PartidoController@getPartidosConfig');
Route::put('/formularioPartido/{id}','PartidoController@modificarPartido');
Route::get('config/crear/partido','PartidoController@formularioInsertar');
Route::put('config/crear/partido','PartidoController@crearPartido');
Route::get('/formularioPartido/{id}','PartidoController@formularioModificar');
