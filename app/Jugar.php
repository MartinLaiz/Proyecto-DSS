<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
      protected $table = 'jugar';

      protected $dates = ['fecha'];

      public function partidos(){
            return $this->belongsTo('App\Partido');
      }

      public function competiciones(){
            return $this->belongsTo('App\Competicion');
      }

      public function temporadas(){
            return $this->belongsTo('App\Temporada');
      }


      public function partidoTemporadaActual(){
            //obtengo la temporada actual
            $temporadaActual = Temporada::where('inicio','<=',Carbon::now())
            ->where('fin','>=',Carbon::now())->first()->id;
            //devuelvo los partidos de la temporada actual

            return $this->partidos()->where('temporada_id','=',$temporadaActual);
      }
}
