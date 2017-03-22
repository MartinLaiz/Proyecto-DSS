<?php

use Illuminate\Database\Seeder;

class PartidosTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $formato = 'd/m/Y';
            $fMin = strtotime(1470052800);
            $fMax = strtotime(1527854400);
            $equipos = DB::table('equipo')->get();
            foreach ($equipos as $equipoLocal) {
                  foreach ($equipos as $equipoVisitante) {
                        $fecha = mt_rand($fMin, $fMax);
                        $estadio = DB::table('estadio')->where('equipo',$equipoLocal->id)->first();
                        DB::table('partido')->insert([
                              'equipoLocal'=> $equipoLocal->id,
                              'equipoVisitante' => $equipoVisitante->id,
                              'fecha' => date($formato, $fecha)
                              'golesLocal' => 2,
                              'golesVisitante' => 0,
                              'estadio' => $estadio->id
                        ]);
                  }
            }

      }
}
