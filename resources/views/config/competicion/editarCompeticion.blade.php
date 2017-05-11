@extends('layouts.master')
@section('title', 'Partidos')
@section('content')
@include('cabecera',array('section'=>'partidos'))

<div class="contenedor row">
      @include('config/configuracion')
      <div class="col-md-10 col-md-offset-1">
            <h2>Competiciones</h2>
            <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                  <thead>
                        <tr>
                            <th>Nombre</th>

                        </tr>
                  <tbody>
                  
                  @foreach($competiciones as $competicion)
                  <tr>
                        <th>{!!$competicion->nombre!!}</th>
                           
                        
                    </tr>
                    @endforeach
                  </tbody>
            </table>
       </div>
 </div>
@endsection
