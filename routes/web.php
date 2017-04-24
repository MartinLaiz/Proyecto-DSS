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



Route::get('/home', 'EquipoController@getHome');

/*
█  █ █▀▀ █  █ █▀▀█ █▀▀█  ▀  █▀▀█
█  █ ▀▀█ █  █ █▄▄█ █▄▄▀ ▀█▀ █  █
▀▀▀ ▀▀▀  ▀▀▀ ▀  ▀ ▀ ▀▀ ▀▀▀ ▀▀▀▀
*/
Route::group(['prefix' => 'usuario'], function(){
      Route::get('/', 'UsuarioController@getUsuarios');                //Muestra todos los jugadores/entrenadores
      Route::post('/','UsuarioController@getUsuario');                //Inserta un usuario
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un usuario
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese usuario
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese usuario
});


/*
█▀▀ █▀▀█ █  █  ▀  █▀▀█ █▀▀█
█▀▀ █  █ █  █ ▀█▀ █  █ █  █
▀▀▀ ▀▀▀█  ▀▀▀ ▀▀▀ █▀▀▀ ▀▀▀▀
*/
Route::group(['prefix' => 'equipo'], function(){
      Route::get('/', 'UsuarioController@getUsuario');                //Muestra todos los equipos
      Route::post('/','UsuarioController@getUsuario');                //Inserta un equipo
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un equipo
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese equipo
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese equipo
});


/*
█▀▀█ █▀▀█ █▀▀█ ▀▀█▀▀  ▀  █▀▀▄ █▀▀█
█  █ █▄▄█ █▄▄▀   █   ▀█▀ █  █ █  █
█▀▀▀ ▀  ▀ ▀ ▀▀   ▀   ▀▀▀ ▀▀▀  ▀▀▀▀
*/
//voy a poner los de jugar ahora, ya que es donde esta con la temporada y la competicion

Route::group(['prefix' => 'jugar'], function(){
      Route::get('/', 'JugarController@getJugar');                //Muestra todos los partidos
      Route::post('/','UsuarioController@getUsuario');                //Inserta un partido
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un partido
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese partido
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese partido
});





Route::group(['prefix' => 'partido'], function(){
      Route::get('/', 'UsuarioController@getUsuario');                //Muestra todos los partidos
      Route::post('/','UsuarioController@getUsuario');                //Inserta un partido
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un partido
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese partido
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese partido
});


Route::group(['middleware' => 'auth'], function(){
      /*
      █▀▀ █▀▀█ █▀▀▄ █▀▀  ▀  █▀▀▀
      █   █  █ █  █ █▀▀ ▀█▀ █ ▀█
      ▀▀▀ ▀▀▀▀ ▀  ▀ ▀   ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'config'], function () {
            Route::get('/','UsuarioController@getUsuario');
            // jugador
            Route::group(['prefix' => 'usuario'], function(){
                  Route::get('/todos','UsuarioController@getUsuario');            //Obtiene todo los jugadores
                  Route::get('/{id}','UsuarioController@getUsuario');             //Obtiene el jugador con el id
                  Route::post('/crear','UsuarioController@getUsuario');
                  Route::get('/editar/{id}','UsuarioController@getUsuario');
                  Route::put('/editar/{id}','UsuarioController@getUsuario');
                  Route::get('/eliminar/{id}','UsuarioController@getUsuario');
                  Route::get('/todos','UsuarioController@getUsuario');
                  Route::get('/todos/{id}','UsuarioController@getUsuario');
            });

            //Equipo
            Route::get('/equipo/crear','UsuarioController@getUsuario');
            Route::post('/equipo/crear','UsuarioController@getUsuario');
            Route::get('/editar/equipos','UsuarioController@getUsuario');
            Route::get('/editar/equipo/{id}','UsuarioController@getUsuario');
            Route::post('/editar/equipo/{id}','UsuarioController@getUsuario');
            Route::get('/eliminar/equipo/{id}','UsuarioController@getUsuario');
            //Partido
            Route::get('/eliminar/partido/{id}','UsuarioController@getUsuario');
            Route::get('/partidos', 'UsuarioController@getUsuario');
            Route::put('/formularioPartido/{id}','UsuarioController@getUsuario');
            Route::get('/crear/partido','UsuarioController@getUsuario');
            Route::put('/crear/partido','UsuarioController@getUsuario');
            Route::get('/formularioPartido/{id}','UsuarioController@getUsuario');
      });


      Route::group(['prefix' => 'admin'], function(){

      });
});
