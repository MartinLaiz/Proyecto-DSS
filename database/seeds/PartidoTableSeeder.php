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
      $equipos = Equipo::get();
      $libreID = Equipo::where('nombreEquipo','like','%Libre%')->first()->id;

      foreach ($equipos as $equipoLocal) {
            foreach ($equipos as $equipoVisitante) {

                  if($equipoLocal->id != $equipoVisitante->id
                  and $equipoLocal->id != $libreID and $equipoVisitante->id != $libreID){

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
