<?php

use Illuminate\Database\Seeder;
use App\Partido;
use App\Equipo;

class PartidoTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $formato = 'Y-m-d H:i:s';
            $today = time();

            $equipos = Equipo::get();
            $libre = Equipo::where('nombreEquipo','like','%Libre%')->first();

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

                              $partido = new Partido([
                                    'equipoLocal_id'=> $equipoLocal->id,
                                    'equipoVisitante_id' => $equipoVisitante->id,
                                    'estadio_id' => $equipoLocal->estadio_id
                              ]);
                              $partido->save();
                        }
                  }
            }
      }
}
