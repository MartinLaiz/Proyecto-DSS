@extends('layouts.master')
@section('title', 'Login')
@section('content')
      <div class="center">
            <div class="imageHome">
                  <img src="/images/Logo.png" alt="Logo FootballManager">
            </div>
            <div class="container-fluid">
                  <div class="col-md-9" style="padding: 0 0 0 0">
                        <div class="col-md-6" style="padding-left: 0">
                              <input type="text" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="col-md-6" style="padding-left: 0">
                              <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                  </div>
                  <div class="col-md-3" style="padding-left: 0">
                        <button type="button" class="btn btn-primary btn-block"> Iniciar sesión </button>
                  </div>
            </div>
      </div>
@endsection
