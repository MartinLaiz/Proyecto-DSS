@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="flex-center position-ref full-height">
      <div class="col-md-8">
            <div>
                  <img class="thumbnail img-responsive center-block" src="/images/Logo.png" alt="Logo FootballManager">
            </div>
            <div>
                  <form action="{{ action('EquipoController@getHome') }}" method="get">
                        <div class="row col-md-9">
                              <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Usuario">
                              </div>
                              <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Contraseña">
                              </div>
                        </div>
                        <div class="col-md-3">
                              <button type="submit" class="btn btn-success btn-block"> Iniciar sesión </button>
                        </div>
                  </form>
            </div>
      </div>
</div>
@endsection
