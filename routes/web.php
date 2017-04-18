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
Auth::routes();

Route::get('/', function () {
      return view('index');
});


//Route::group(['middleware' => 'auth'], function(){

      Route::get('/home', 'UserController@getUsuario');

      /*
      █  █ █▀▀ █  █ █▀▀█ █▀▀█  ▀  █▀▀█
      █  █ ▀▀█ █  █ █▄▄█ █▄▄▀ ▀█▀ █  █
       ▀▀▀ ▀▀▀  ▀▀▀ ▀  ▀ ▀ ▀▀ ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'usuario'], function(){
            Route::get('/', 'UserController@getUsuarios');                //Muestra todos los jugadores/entrenadores
            Route::post('/','UserController@getUsuario');                //Inserta un usuario
            Route::get('/{id}','UserController@getUsuario');             //Muestra solo un usuario
            Route::put('/{id}','UserController@getUsuario');             //Modifica ese usuario
            Route::delete('/{id}','UserController@getUsuario');          //Elimina ese usuario
      });


      /*
      █▀▀ █▀▀█ █  █  ▀  █▀▀█ █▀▀█
      █▀▀ █  █ █  █ ▀█▀ █  █ █  █
      ▀▀▀ ▀▀▀█  ▀▀▀ ▀▀▀ █▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'equipo'], function(){
            Route::get('/', 'UserController@getUsuario');                //Muestra todos los equipos
            Route::post('/','UserController@getUsuario');                //Inserta un equipo
            Route::get('/{id}','UserController@getUsuario');             //Muestra solo un equipo
            Route::put('/{id}','UserController@getUsuario');             //Modifica ese equipo
            Route::delete('/{id}','UserController@getUsuario');          //Elimina ese equipo
      });


      /*
      █▀▀█ █▀▀█ █▀▀█ ▀▀█▀▀  ▀  █▀▀▄ █▀▀█
      █  █ █▄▄█ █▄▄▀   █   ▀█▀ █  █ █  █
      █▀▀▀ ▀  ▀ ▀ ▀▀   ▀   ▀▀▀ ▀▀▀  ▀▀▀▀
      */
      Route::group(['prefix' => 'partido'], function(){
            Route::get('/', 'UserController@getUsuario');                //Muestra todos los partidos
            Route::post('/','UserController@getUsuario');                //Inserta un partido
            Route::get('/{id}','UserController@getUsuario');             //Muestra solo un partido
            Route::put('/{id}','UserController@getUsuario');             //Modifica ese partido
            Route::delete('/{id}','UserController@getUsuario');          //Elimina ese partido
      });


      /*
      █▀▀ █▀▀█ █▀▀▄ █▀▀  ▀  █▀▀▀
      █   █  █ █  █ █▀▀ ▀█▀ █ ▀█
      ▀▀▀ ▀▀▀▀ ▀  ▀ ▀   ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'config'], function () {
            Route::get('/','UserController@getUsuario');
            // jugador
            Route::group(['prefix' => 'usuario'], function(){
                  Route::get('/todos','UserController@getUsuario');            //Obtiene todo los jugadores
                  Route::get('/{id}','UserController@getUsuario');             //Obtiene el jugador con el id
                  Route::post('/crear','UserController@getUsuario');
                  Route::get('/editar/{id}','UserController@getUsuario');
                  Route::put('/editar/{id}','UserController@getUsuario');
                  Route::get('/eliminar/{id}','UserController@getUsuario');
                  Route::get('/todos','UserController@getUsuario');
                  Route::get('/todos/{id}','UserController@getUsuario');
            });

            //Equipo
            Route::get('/equipo/crear','UserController@getUsuario');
            Route::post('/equipo/crear','UserController@getUsuario');
            Route::get('/editar/equipos','UserController@getUsuario');
            Route::get('/editar/equipo/{id}','UserController@getUsuario');
            Route::post('/editar/equipo/{id}','UserController@getUsuario');
            Route::get('/eliminar/equipo/{id}','UserController@getUsuario');
            //Partido
            Route::get('/eliminar/partido/{id}','UserController@getUsuario');
            Route::get('/partidos', 'UserController@getUsuario');
            Route::put('/formularioPartido/{id}','UserController@getUsuario');
            Route::get('/crear/partido','UserController@getUsuario');
            Route::put('/crear/partido','UserController@getUsuario');
            Route::get('/formularioPartido/{id}','UserController@getUsuario');
      });


      Route::group(['prefix' => 'admin'], function(){

      });

//});
