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


Route::group(['middleware' => 'auth'], function(){

      Route::get('/home', '');


      /*
      █  █ █▀▀ █  █ █▀▀█ █▀▀█  ▀  █▀▀█
      █  █ ▀▀█ █  █ █▄▄█ █▄▄▀ ▀█▀ █  █
       ▀▀▀ ▀▀▀  ▀▀▀ ▀  ▀ ▀ ▀▀ ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'usuario'], function(){
            Route::get('/', '');                //Muestra todos los jugadores/entrenadores
            Route::post('/','');                //Inserta un usuario
            Route::get('/{id}','');             //Muestra solo un usuario
            Route::put('/{id}','');             //Modifica ese usuario
            Route::delete('/{id}','');          //Elimina ese usuario
      });


      /*
      █▀▀ █▀▀█ █  █  ▀  █▀▀█ █▀▀█
      █▀▀ █  █ █  █ ▀█▀ █  █ █  █
      ▀▀▀ ▀▀▀█  ▀▀▀ ▀▀▀ █▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'equipo'], function(){
            Route::get('/', '');                //Muestra todos los equipos
            Route::post('/','');                //Inserta un equipo
            Route::get('/{id}','');             //Muestra solo un equipo
            Route::put('/{id}','');             //Modifica ese equipo
            Route::delete('/{id}','');          //Elimina ese equipo
      });


      /*
      █▀▀█ █▀▀█ █▀▀█ ▀▀█▀▀  ▀  █▀▀▄ █▀▀█
      █  █ █▄▄█ █▄▄▀   █   ▀█▀ █  █ █  █
      █▀▀▀ ▀  ▀ ▀ ▀▀   ▀   ▀▀▀ ▀▀▀  ▀▀▀▀
      */
      Route::group(['prefix' => 'partido'], function(){
            Route::get('/', '');                //Muestra todos los partidos
            Route::post('/','');                //Inserta un partido
            Route::get('/{id}','');             //Muestra solo un partido
            Route::put('/{id}','');             //Modifica ese partido
            Route::delete('/{id}','');          //Elimina ese partido
      });


      /*
      █▀▀ █▀▀█ █▀▀▄ █▀▀  ▀  █▀▀▀
      █   █  █ █  █ █▀▀ ▀█▀ █ ▀█
      ▀▀▀ ▀▀▀▀ ▀  ▀ ▀   ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'config'], function () {
            Route::get('/','');
            // jugador
            Route::group(['prefix' => 'usuario'], function(){
                  Route::get('/todos','');            //Obtiene todo los jugadores
                  Route::get('/{id}','');             //Obtiene el jugador con el id
                  Route::post('/crear','');
                  Route::get('/editar/{id}','');
                  Route::put('/editar/{id}','');
                  Route::get('/eliminar/{id}','');
                  Route::get('/todos','');
                  Route::get('/todos/{id}','');
            });

            //Equipo
            Route::get('/equipo/crear','');
            Route::post('/equipo/crear','');
            Route::get('/editar/equipos','');
            Route::get('/editar/equipo/{id}','');
            Route::post('/editar/equipo/{id}','');
            Route::get('/eliminar/equipo/{id}','');
            //Partido
            Route::get('/eliminar/partido/{id}','');
            Route::get('/partidos', '');
            Route::put('/formularioPartido/{id}','');
            Route::get('/crear/partido','');
            Route::put('/crear/partido','');
            Route::get('/formularioPartido/{id}','');
      });


      Route::group(['prefix' => 'admin'], function(){

      });

});
