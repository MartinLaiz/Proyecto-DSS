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

            $partido = Partido::get();
            $competicion = Competicion::get();
            $temporada = Temporada::get();

            $formato = 'Y-m-d H:i:s';
            $today = time();

        foreach($temporada as $temporadas){
            foreach($competicion as $competiciones){
                foreach($partido as $partidos){
                    $fecha = mt_rand(1470052800, 1527854400);
                    $golesLocal = 0;
                    $golesVisitante = 0;

                    if($fecha<$today){
                        $golesLocal = mt_rand(0, 5);
                        $golesVisitante = mt_rand(0, 5);
                    }

                    $jugar = new Jugar([
                        'competicion_id'=> $competiciones->id,
                        'temporada_id' =>$temporadas->id,
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
