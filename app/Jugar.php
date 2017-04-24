<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
      protected $table = 'jugar';

      protected $dates = ['fecha'];


      public function competicion(){
            return $this->belongsTo('App\Competicion');
      }

      public function partido(){
            return $this->belongsTo('App\Partido');
      }

      public function temporada(){
            return $this->belongsTo('App\Temporada');
      }


      public function partidos($temp){
            return $this->jugar('App\Temporada');
      }
}
