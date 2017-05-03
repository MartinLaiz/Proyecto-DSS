
@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))

<div class="contenedor row">
	@include('config/configuracion')
	<form action="{{action('ParticiparController@crearParticipar',[$partido->id])}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}  
	<div class="row">
	
                  
		<div class="col-md-6">
			<table class="table">
			<thead>
				<tr>
					<th> <img data-src="holder.js/10x10" alt="10x10" style="width: 50px; height: 50px;" data-holder-rendered="true" src=  "{{ asset ($partido->equipoLocal->logo)}}" class="img-circle img-responsive"> </th>
					<th>{!!$partido->equipoLocal->nombreEquipo!!}</th>
				</tr>
			</thead>
			
		</table>

		</div>
		<div class="col-md-6">
			<table class="table">
			<thead>
				<tr>
					<th> <img data-src="holder.js/10x10" alt="10x10" style="width: 50px; height: 50px;" data-holder-rendered="true" src=  "{{ asset ($partido->equipoVisitante->logo)}}" class="img-circle img-responsive"> </th>
					<th>{!!$partido->equipoVisitante->nombreEquipo!!}</th>
				</tr>
			</thead>
			
		</table>

		</div>

	</div>

	<div class="row">
		<div class="col-md-6">
			@include('config/tablas/tableParticiparElegirLocal')
		
		</div>
		<div class="col-md-6">
			@include('config/tablas/tableParticiparElegirVisitante')
		</div>
	
	</div>

	<div class="row form-group">
		<div class="col-md-2">
			<button class="btn btn-success btn-success" type="submit">Aceptar</button>
		</div>
	</div>
	</form>
</div>
@endsection

     
