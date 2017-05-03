
@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
@include('cabecera',array('section'=>'plantilla'))

<div class="contenedor row">
	@include('config/configuracion')
	<div class="row">
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

	<div class="row">
		<div class="col-md-6">

			@if($cantidad != 0)
				@include('config/tablas/tableParticipar')
			@else
				@include('config/tablas/tableParticiparSin')
			@endif
			<div class="panel-footer">
				<a href="" data-original-title="Edit this user" data-toggle="tooltip" 
				type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			@if($cantidad != 0)
				@include('config/tablas/tableParticipar')
			@else
				@include('config/tablas/tableParticiparSin')
			@endif
			<div class="panel-footer">
				<a href="" data-original-title="Edit this user" data-toggle="tooltip" 
				type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			</div>
		</div>
	</div>
</div>
@endsection

     
