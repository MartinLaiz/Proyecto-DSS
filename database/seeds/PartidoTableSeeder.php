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
            foreach ($equipos as $equipoLocal) {
                  foreach ($equipos as $equipoVisitante) {
                        if($equipoLocal->id != $equipoVisitante->id){
                              $fecha = mt_rand(1470052800, 1527854400);
                              DB::table('partido')->insert([
                                    'equipoLocal'=> $equipoLocal->id,
                                    'equipoVisitante' => $equipoVisitante->id,
                                    'fecha' => date($formato, $fecha),
                                    'golesLocal' => 2,
                                    'golesVisitante' => 0,
                                    'estadio' => $equipoLocal->estadio
                              ]);
                        }
                  }
            }

      }
}
