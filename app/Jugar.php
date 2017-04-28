<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
      protected $table = 'jugar';

      protected $dates = ['fecha'];

      public function partido(){
            return $this->belongsTo('App\Partido')->with('equipoLocal','equipoVisitante','estadio');
      }

      public function competicion(){

            return $this->belongsTo('App\Competicion');
      }

      public function temporada(){
            return $this->belongsTo('App\Temporada');
      }

   

}
