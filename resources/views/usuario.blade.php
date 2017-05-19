@extends('layouts.master')
@section('title', $usuario->nombre.' '.$usuario->apellidos)
@section('content')
@include('cabecera',array('section'=>'plantilla'))
<div class="contenedor row">
      <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 toppad" >
                  <br>

                  <div class="panel panel-info">
                        <div class="panel-heading">
                              <h3 class="panel-title">Perfil</h3>
                        </div>
                        <div class="panel-body">
                              <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center">
                                          <img alt="User Pic" src="{{URL::asset('images/users/').'/'.$usuario->foto}}" onerror="this.src = '/images/users/defaultUser.png'" class="img-circle img-responsive">
                                    </div>
                                    <div class=" col-md-9 col-lg-9 ">
                                          <table class="table table-user-information">
                                                <tbody>
                                                      <tr>
                                                            <td>DNI:</td>
                                                            <td> {{ $usuario->dni }}</td>
                                                      </tr>
                                                      <tr>
                                                            <td>Nombre:</td>
                                                            <td>{{ $usuario->nombre }}</td>
                                                      </tr>
                                                      <tr>
                                                            <td>Apellidos:</td>
                                                            <td>  {{ $usuario->apellidos }}</td>
                                                      </tr>

                                                      <tr>
                                                            <td>Fecha de nacimiento:</td>
                                                            <td>   {{ date('d/m/Y',strtotime($usuario->fNac)) }} <strong>({{ \Carbon\Carbon::now()->diffInYears($usuario->fNac) }})</strong></td>
                                                      </tr>
                                                      @if($usuario->rol == 0)
                                                      <tr>
                                                            <td> Posición:</td>
                                                            <td>
                                                                  @if($usuario->posicion == '4')
                                                                  Delantero
                                                                  @elseif($usuario->posicion == '3')
                                                                  Medio
                                                                  @elseif($usuario->posicion == '2')
                                                                  Defensa
                                                                  @elseif($usuario->posicion == '1')
                                                                  Portero
                                                                  @else
                                                                  No asignado
                                                                  @endif

                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>Cargo:</td>
                                                            <td>
                                                                  @if($usuario->cargo == '1')
                                                                  Primer capitán
                                                                  @elseif($usuario->cargo == '2')
                                                                  Segundo capitán
                                                                  @elseif($usuario->posicion == '3')
                                                                  Tercer capitán
                                                                  @else
                                                                  Sin cargo
                                                                  @endif
                                                            </td>
                                                      </tr>

                                                      <tr>
                                                            <td>Dorsal:</td>
                                                            <td>{{ $usuario->dorsal }}</td>
                                                      </tr>
                                                      @elseif($usuario->rol == 1)
                                                      <tr>
                                                            <td>Cargo:</td>
                                                            <td>
                                                                  @if($usuario->cargo == '1')
                                                                  Primer entrenador
                                                                  @elseif($usuario->cargo == '2')
                                                                  Segundo entrenador
                                                                  @else
                                                                  Becario
                                                                  @endif
                                                            </td>
                                                      </tr>
                                                      @endif
                                                </tbody>
                                          </table>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                          <button type="button" class="btn" name="button" onclick="window.history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Volver</button>
                                    </div>
                                    <div class="col-md-3 col-md-offset-6 col-lg-3 col-lg-offset 6">
                                          <a href="{{ action('UsuarioController@getFormUpdate', ['id' => $usuario->id]) }}" class="btn btn-success btn-block">Editar</a>
                                    </div>
                              </div>
                        </div>

                        <div class="panel-heading">
                              <h3 class="panel-title">Equipo</h3>
                        </div>
                        <div class="panel-body">
                              <div class="row">
                                    @if($usuario->equipo->id > 1)
                                    <div class=" col-md-9 col-lg-9 ">
                                          <table class="table table-user-information">
                                                <tbody>
                                                      <tr>
                                                            <td>Nombre:</td>
                                                            <td> {{ $usuario->equipo->nombreEquipo }}</td>
                                                      </tr>
                                                      <tr>
                                                            <td>Estadio:</td>
                                                            <td>{{ $usuario->equipo->estadio->nombre }}</td>
                                                      </tr>
                                                      <tr>
                                                            <td>Aforo:</td>
                                                            <td>{{ $usuario->equipo->estadio->capacidad }}</td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                    </div>
                                    <div class="col-md-3 col-lg-3 " align="center">
                                          <img alt="User Pic" src="../{{ $usuario->equipo->logo }}" onerror="this.src = '../images/escudos/defaultTeam.png'" class="img-circle img-responsive">
                                    </div>
                                    @else
                                    <div class="text-center">
                                           Ninguno
                                    </div>
                                    @endif
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection
