<?php

use Illuminate\Database\Seeder;
use App\Temporada;

class TemporadaTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            DB::table('temporada')->delete();

            $temporada = new Temporada(['nombre'=>'15/16', 'fecha'=>'2015-08-01']);
            $temporada->save();

            $temporada = new Temporada(['nombre'=>'16/17', 'fecha'=>'2016-08-01']);
            $temporada->save();

            $temporada = new Temporada(['nombre'=>'17/18', 'fecha'=>'2017-08-01']);
            $temporada->save();
      }
}
