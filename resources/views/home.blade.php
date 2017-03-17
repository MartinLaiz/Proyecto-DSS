@extends('layouts.master')
@section('title', 'Título de la página')
@section('menu')
      @parent
      <p>Este contenido es añadido al menú principal.</p>
@endsection
@section('content')
      <p>Este apartado aparecerá en la sección
      "content".</p>
@endsection
