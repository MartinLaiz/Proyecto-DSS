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
▀▀▀  ▀▀▀  ▀▀▀ ▀  ▀ ▀ ▀▀ ▀▀▀ ▀▀▀▀
*/
Route::group(['prefix' => 'usuarios'], function(){
      Route::get('/', 'UsuarioController@getUsuarios');               //Muestra todos los jugadores/entrenadores
      Route::post('/','UsuarioController@getUsuarios');                //Inserta un usuario
      Route::get('/{id}','UsuarioController@getUsuario');             //Muestra solo un usuario
      Route::put('/{id}','UsuarioController@nada');             //Modifica ese usuario
      Route::delete('/{id}','UsuarioController@nada');          //Elimina ese usuario
});


/*
█▀▀ █▀▀█ █  █  ▀  █▀▀█ █▀▀█
█▀▀ █  █ █  █ ▀█▀ █  █ █  █
▀▀▀ ▀▀▀█  ▀▀▀ ▀▀▀ █▀▀▀ ▀▀▀▀
*/
Route::group(['prefix' => 'equipo'], function(){
      Route::get('/', 'EquipoController@getEquipos');                //Muestra todos los equipos
      Route::post('/','UsuarioController@nada');                //Inserta un equipo
      Route::get('/{id}','EquipoController@getEquipo');             //Muestra solo un equipo
      Route::put('/{id}','UsuarioController@nada');             //Modifica ese equipo
      Route::delete('/{id}','UsuarioController@nada');          //Elimina ese equipo
});


/*
█▀▀█ █▀▀█ █▀▀█ ▀▀█▀▀  ▀  █▀▀▄ █▀▀█
█  █ █▄▄█ █▄▄▀   █   ▀█▀ █  █ █  █
█▀▀▀ ▀  ▀ ▀ ▀▀   ▀   ▀▀▀ ▀▀▀  ▀▀▀▀
*/
//voy a poner los de jugar ahora, ya que es donde esta con la temporada y la competicion


Route::group(['prefix' => 'partido'], function(){
      Route::get('/', 'PartidoController@getPartidos');                //Muestra todos los partidos
      Route::post('/','UsuarioController@nada');                //Inserta un partido
      Route::get('/{id}','UsuarioController@nada');             //Muestra solo un partido
      Route::put('/{id}','UsuarioController@nada');             //Modifica ese partido
      Route::delete('/{id}','UsuarioController@nada');          //Elimina ese partido
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
                  Route::get('crearModificar','UsuarioController@getForm');
                  Route::get('/todos','UsuarioController@nada');            //Obtiene todo los jugadores
                  Route::get('/{id}','UsuarioController@nada');             //Obtiene el jugador con el id
                  Route::post('/crear','UsuarioController@crearModificarUsuario');
                  Route::get('/editar/{id}','UsuarioController@nada');
                  Route::put('/editar/{id}','UsuarioController@nada');
                  Route::get('/eliminar/{id}','UsuarioController@nada');
                  Route::get('/todos','UsuarioController@nada');
                  Route::get('/todos/{id}','UsuarioController@nada');
            });

            //Equipo
            Route::get('/equipo/crear','EquipoController@formulario'); //Va al formulario de modificar
            Route::post('/equipo/crear','EquipoController@crearEquipo'); //Crea el quipo
            Route::get('/editar/equipos','EquipoController@editar');
            Route::get('/editar/equipo/{id}','EquipoController@modificarEquipo');
            Route::post('/editar/equipo/{id}','EquipoController@modificarEquipoPost');
            Route::get('/eliminar/equipo/{id}','EquipoController@eliminar');
            //Partido
            Route::get('/eliminar/partido/{id}','PartidoController@eliminarPartido');
            Route::get('/editar/partidos','PartidoController@editarPartidos');
            Route::get('/crear/partido','PartidoController@formularioInsertar');
            Route::put('/crear/partido','PartidoController@crearPartido');
            Route::post('/modidificar/partido/{id}','PartidoController@modificarPartido');
            Route::get('/modidificar/partido/{id}','PartidoController@formularioModificar');
            Route::get('/introducirJugadores/partido/{id}','PartidoController@introducirJugadores');
            Route::get('/partido/{id}','ParticiparController@verParticipar');
            Route::get('/introducir/datos/partido/{id}','ParticiparController@formularioInsertar');
            Route::put('/introducir/datos/partido/{id}','ParticiparController@crearParticipar');
             Route::get('/eliminar/partido/jugadores/{id}','ParticiparController@borrarParticipar');
      });


      Route::group(['prefix' => 'admin'], function(){

      });
//});
