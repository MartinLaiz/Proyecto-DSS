<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
      protected $table = 'temporada';
      protected $dates = ['inicio', 'fin'];

       public function temporada(){
            return $this->belongsTo('App\Jugar');
      }

      public function partidos(){
            return $this->belongsToMany('App\Jugar');
      }

      public function competicion(){
            return $this->belongsToMany('App\Competicion','jugar','competicion_id');
      }
}
