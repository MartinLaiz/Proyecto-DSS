
@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))

<div class="contenedor row">

	@include('config/configuracion')
	    {{-- Muestra errores --}}

	@if (count($errors) > 0)
            <ul>
            @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">
                        <a href="#" class="alert-link">{{ $error }}</a>
                  </div>
            @endforeach
            </ul>
      @endif
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Información</a></li>
		<li><a data-toggle="tab" href="#menu1">Jugadores</a></li>
	</ul>

	<div class="row form-group">
		<div class="col-md-6">
			<table class="table">
			<thead>
				<tr>
					<th> <img data-src="holder.js/10x10" alt="10x10" style="width: 50px; height: 50px;" data-holder-rendered="true" src=  "{{ asset ($partido->equipoLocal->logo)}}" class="img-circle img-responsive"> </th>
					<th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
					<th>{!!$partido->golesLocal!!}</th>
				</tr>
			</thead>

			</table>
		</div>

		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
					<th>{!!$partido->golesVisitante!!}</th>
					<th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
					<th> <img data-src="holder.js/10x10" alt="10x10" style="width: 50px; height: 50px;" data-holder-rendered="true" src=  "{{ asset ($partido->equipoVisitante->logo)}}" class="img-circle img-responsive"> </th>

				</tr>
				</thead>
			</table>

		</div>

	</div>
	
	<div class="tab-content">
		{{-- INFORMACION --}}
		<div id="home" class="tab-pane fade in active">
			<div class=" col-md-9 col-lg-9 "> 
				<table class="table table-user-information">
				<tbody>
					<tr>
					<td>Competicion:</td>
					<td>  {{ $partido->competicion->nombre }}</td>
					</tr>
					<tr>
					<td>Temporada:</td>
					<td> {{ $partido->temporada->nombre }}</td>
					</tr>
					<tr>
					<td>Fecha:</td>
					<td>{{ $partido->fecha }}</td>
					</tr>
					<tr>
					<td>Estadio</td>
					<td>{{ $partido->estadio->nombre }}</td>
					</tr>
				</tbody>
				</table>
			</div>


		<div class="bs-calltoaction bs-calltoaction-default">
			<div class="row">
				<div class="col-md-9 cta-contents">
					<h1 class="cta-title">Cronica</h1>
					<div class="cta-desc">
						@if($cantidad != 0)
							<PRE>{{ $partido->cronica }}</PRE>
						@else
							<p>No hay datos disponibles</p>
						@endif
					</div>
				</div>
			</div>
		</div>

			<a title="Modificar Partido" href="{{ action('PartidoController@formularioModificar', $partido->id)}}" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			<a title="Eliminar Partido" href="{{ action('PartidoController@eliminarPartido', $partido->id) }}"  data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	
	</div>
		{{-- JUGARORES --}}
		<div id="menu1" class="tab-pane fade">
			<div class="row form-group">

				<div class="col-md-6">

					@if($cantidad != 0)
						@include('config/tablas/tableParticiparLocal')
					@else
						@include('config/tablas/tableParticiparSin')
					@endif

				
						<a title="Crear Jugadores y Cronica" href="{{ action('ParticiparController@formularioInsertar', $partido->id) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
						<a title="Eliminar Jugadores y Cronica" href="{{ action('ParticiparController@borrarParticipar', $partido->id) }}"  data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						<a title="Modificar Jugadores y Cronica" href="{{ action('ParticiparController@formularioModificar', $partido->id) }}"  data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-remove"></i></a>

				</div>

				<div class="col-md-6">
					@if($cantidad != 0)
						@include('config/tablas/tableParticiparVisitante')
					@else
						@include('config/tablas/tableParticiparSin')
					@endif
				</div>
			</div>
		</div>
	</div>
</div>




		


@endsection

     


