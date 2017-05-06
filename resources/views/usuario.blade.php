@extends('layouts.master')
@section('title', 'Perfil de jugador')
@section('content')
@include('cabecera',array('section'=>'plantilla'))


<div class="contenedor row">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">


      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <br>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Perfil</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/users/{{ $usuario->dni }}.png" onerror="this.src = '../images/users/defaultUser.png'" class="img-circle img-responsive"> </div>

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
                        <td>   {{ $usuario->fNac }}</td>
                      </tr>

                      <tr>
                        <td> Posición:</td>
                        <td>
                              @if($usuario->posicion == 'Delantero')
                                    Delantero
                              @elseif($usuario->posicion == 'Medio')
                                    Medio
                              @elseif($usuario->posicion == 'Defensa')
                                    Defensa
                              @elseif($usuario->posicion == 'Portero')
                                    Portero
                              @else
                                    No asignado</h4>
                              @endif

                        </td>
                      </tr>

                      <tr>
                        <td>Cargo:</td>
                        <td>     @if($usuario->cargo == '1')
                                    Primer capitán
                              @elseif($usuario->cargo == '2')
                                    Segundo capitán
                              @elseif($usuario->posicion == '3')
                                    Tercer capitán
                              @else
                                    Sin cargo
                              @endif</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
