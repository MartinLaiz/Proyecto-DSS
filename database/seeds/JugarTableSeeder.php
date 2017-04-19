<?php

use Illuminate\Database\Seeder;
use App\Partido;
use App\Competicion;
use App\Temporada;
use App\Jugar;

class JugarTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {

            $partidos = Partido::get();
            $competiciones = Competicion::get();
            $temporadas = Temporada::get();

            $formato = 'Y-m-d H:i:s';
            $today = time();

            foreach($temporadas as $temporada){
                  foreach($competiciones as $competicion){
                        foreach($partidos as $partido){
                              $fecha = mt_rand(strtotime($temporada->inicio), $temporada->fin);
                              $golesLocal = 0;
                              $golesVisitante = 0;

                              if($fecha<$today){
                                    $golesLocal = mt_rand(0, 5);
                                    $golesVisitante = mt_rand(0, 5);
                              }

                              $jugar = new Jugar([
                                    'competicion_id'=> $competiciones->id,
                                    'temporada_id' =>$temporada->id,
                                    'partido_id' => $partidos->id,
                                    'golesLocal' =>$golesLocal,
                                    'golesVisitante' => $golesVisitante,
                                    'fecha' => $fecha

                              ]);
                              $jugar->save();
                        }
                  }
            }
      }
}
