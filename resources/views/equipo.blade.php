
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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src=  "{{ asset ($equipo->logo)}}" class="img-circle img-responsive"> </div>
        
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Equipo:</td>
                        <td>  {{ $equipo->cif }}</td>
                      </tr>
                      <tr>
                        <td>Nombre:</td>
                        <td> {{ $equipo->nombreEquipo }}</td>
                      </tr>
                      <tr>
                        <td>Presupuesto:</td>
                        <td>{{ $equipo->presupuesto }}</td>
                      </tr>

                       <tr>
                        <td>Estadio</td>
                        <td>{{ $estadio->nombre }}</td>
                      </tr>
                        <td>Capacidad</td>
                        <td> {{ $estadio->capacidad }}</td>
                      </tr>
                    </tbody>
                  </table>
                   <a href="#" class="btn btn-primary">Añadir Jugador</a>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
              <span class="pull-right">
                  <a href="" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                  <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
              </span>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection

     
