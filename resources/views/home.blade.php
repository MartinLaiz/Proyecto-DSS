@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

<div class="contenedor">
      @include('cabecera',array('section'=>'Inicio'))
      <div class="row">
            <div class="col-md-5" style="padding-top:120px" > <!-- Tabla ultimo partido -->
                  <div class="col-md-6">
                        <table class="table table-striped">
                              <caption><p class="text-muted">Último partido</p></caption>
                              <thead>
                                    <tr class="">
                                          <th><a href="#" class="text-primary">Equipo Local</a></th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr class="">
                                          <td>Alineación</td>
                                    </tr>
                                    <tr class="">
                                          <td>Banquillo</td>
                                    </tr>
                                    <tr class="">
                                          <td>Cambios</td>
                                    </tr>
                                    <tr class="">
                                          <td>Goles</td>
                                    </tr>
                                    <tr class="">
                                          <td>Observaciones</td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
                  <div class="col-md-6">
                        <table class="table table-striped text-right">
                              <thead>
                                    <tr class="">
                                          <th><a href="#" class="text-primary">Equipo Visitante</a></th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr class="">
                                          <td>Alineación</td>
                                    </tr>
                                    <tr class="">
                                          <td>Banquillo</td>
                                    </tr>
                                    <tr class="">
                                          <td>Cambios</td>
                                    </tr>
                                    <tr class="">
                                          <td>Goles</td>
                                    </tr>
                                    <tr class="">
                                          <td>Observaciones</td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
            </div>


            <div class='col-sm-6' style='padding-top:120px  ' >
                  <caption><p class="text-muted">Partido recientes en Liga</p></caption>
            </div>
            <div class='col-sm-7' style='padding-top:120px  ' > <!-- Resto de la pagina -->
                  <h3 class="">Partido recientes en Liga</h3>
            </div>
      </div>
</div>

@endsection
