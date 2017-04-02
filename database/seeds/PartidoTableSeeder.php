<?php

use Illuminate\Database\Seeder;

class PartidoTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $formato = 'Y/m/d';
            $equipos = DB::table('equipo')->get();
            $libre = DB::table('equipo')->where('nombreEquipo','like','%Libre%')->first();
            $today = time();
            foreach ($equipos as $equipoLocal) {
                  foreach ($equipos as $equipoVisitante) {
                        if($equipoLocal->id != $equipoVisitante->id
                        and $equipoLocal->id!= $libre->id
                        and $equipoVisitante->id!= $libre->id){
                              $fecha = mt_rand(1470052800, 1527854400);
                              $golesLocal = 0;
                              $golesVisitante = 0;
                              if($fecha<$today){
                                    $golesLocal = mt_rand(0, 5);
                                    $golesVisitante = mt_rand(0, 5);
                              }
                              DB::table('partido')->insert([
                                    'equipoLocal'=> $equipoLocal->id,
                                    'equipoVisitante' => $equipoVisitante->id,
                                    'fecha' =>  date($formato,$fecha),
                                    'golesLocal' => $golesLocal,
                                    'golesVisitante' => $golesVisitante,
                                    'estadio' => $equipoLocal->estadio
                              ]);
                        }
                  }
            }

      }
}
