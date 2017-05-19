@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="flex-center position-ref full-height">
      <div class="col-md-8">
            <div>
                  <img class="thumbnail img-responsive center-block" src="/images/Logo.png" alt="Logo FootballManager">
            </div>
            <div>
                  <form class="form-horizontal" role="form" action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row col-md-9">
                              <div class="col-md-6">
                                    <input id="dni" type="text" class="form-control" name="dni" placeholder="Usuario">
                              </div>
                              <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
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
