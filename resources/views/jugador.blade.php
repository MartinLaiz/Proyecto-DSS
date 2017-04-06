@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))


<div class="contenedor row">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Perfil</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://www.memsource.com/wp-content/uploads/2016/04/head-659652_640.png" class="img-circle img-responsive"> </div>
        
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>DNI:</td>
                        <td> {{ $jugador->dni }}</td>
                      </tr>
                      <tr>
                        <td>Nombre:</td>
                        <td>{{ $jugador->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Apellidos::</td>
                        <td>  {{ $jugador->apellidos }}</td>
                      </tr>

                       <tr>
                        <td>Fecha de nacimiento:</td>
                        <td>   {{ $jugador->fNac }}</td>
                      </tr>

                      <tr>
                        <td> Posición:</td>
                        <td>   
                              @if($jugador->posicion == 'Delantero')
                                    Delantero
                              @elseif($jugador->posicion == 'Medio')
                                    Medio
                              @elseif($jugador->posicion == 'Defensa')
                                    Defensa
                              @elseif($jugador->posicion == 'Portero')
                                    Portero
                              @else
                                    No asignado</h4>
                              @endif
                        
                        </td>
                      </tr>

                      <tr>
                        <td>Cargo:</td>
                        <td>     @if($jugador->cargo == '1')
                                    Primer capitán
                              @elseif($jugador->cargo == '2')
                                    Segundo capitán
                              @elseif($jugador->posicion == '3')
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


     