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
      Route::get('/', 'EquipoController@getEquipos');                //Muestra todos los equipos
      Route::post('/','UsuarioController@getUsuario');                //Inserta un equipo
      Route::get('/{id}','EquipoController@getEquipo');             //Muestra solo un equipo
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese equipo
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese equipo
});


/*
█▀▀█ █▀▀█ █▀▀█ ▀▀█▀▀  ▀  █▀▀▄ █▀▀█
█  █ █▄▄█ █▄▄▀   █   ▀█▀ █  █ █  █
█▀▀▀ ▀  ▀ ▀ ▀▀   ▀   ▀▀▀ ▀▀▀  ▀▀▀▀
*/
//voy a poner los de jugar ahora, ya que es donde esta con la temporada y la competicion


Route::group(['prefix' => 'partido'], function(){
      Route::get('/', 'JugarController@getJugar');                //Muestra todos los partidos
      Route::post('/','UsuarioController@getUsuario');                //Inserta un partido
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un partido
      Route::put('/{id}','UsuarioController@getUsuario');             //Modifica ese partido
      Route::delete('/{id}','UsuarioController@getUsuario');          //Elimina ese partido
});


//Route::group(['middleware' => 'auth'], function(){
      /*
      █▀▀ █▀▀█ █▀▀▄ █▀▀  ▀  █▀▀▀
      █   █  █ █  █ █▀▀ ▀█▀ █ ▀█
      ▀▀▀ ▀▀▀▀ ▀  ▀ ▀   ▀▀▀ ▀▀▀▀
      */
      Route::group(['prefix' => 'config'], function () {
            Route::get('/','UsuarioController@getConfig');
            // jugador
            Route::group(['prefix' => 'usuario'], function(){
                  Route::get('/todos','UsuarioController@getUsuario');            //Obtiene todo los jugadores
                  Route::get('/{id}','UsuarioController@getUsuario');             //Obtiene el jugador con el id
                  Route::get('/crearModificar','UsuarioController@getForm');
                  Route::post('/crear','UsuarioController@crearModificarUsuario');
                  Route::get('/editar/{id}','UsuarioController@getUsuario');
                  Route::put('/editar/{id}','UsuarioController@getUsuario');
                  Route::get('/eliminar/{id}','UsuarioController@getUsuario');
                  Route::get('/todos','UsuarioController@getUsuario');
                  Route::get('/todos/{id}','UsuarioController@getUsuario');
            });

            //Equipo
            Route::get('/equipo/crear','EquipoController@formulario'); //Va al formulario de modificar
            Route::post('/equipo/crear','EquipoController@crearEquipo'); //Crea el quipo
            Route::get('/editar/equipos','EquipoController@editar');
            Route::get('/editar/equipo/{id}','EquipoController@modificarEquipo');
            Route::post('/editar/equipo/{id}','EquipoController@modificarEquipoPost');
            Route::get('/eliminar/equipo/{id}','EquipoController@eliminar');
            //Partido
            Route::get('/eliminar/partido/{id}','UsuarioController@getUsuario');
            Route::get('/editar/partidos','JugarController@editarPartidos');
            Route::put('/formularioPartido/{id}','UsuarioController@getUsuario');
            Route::get('/crear/partido','UsuarioController@getUsuario');
            Route::put('/crear/partido','UsuarioController@getUsuario');
            Route::get('/formularioPartido/{id}','UsuarioController@getUsuario');
      });


      Route::group(['prefix' => 'admin'], function(){

      });
//});
