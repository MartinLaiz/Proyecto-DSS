<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
      protected $table = 'competicion';

      public function partidosJugados(){
            return $this->hasMany('App\Jugar');
      }

      public function partido(){
            return $this->belongsToMany('App\Partido','jugar','partido_id');
      }

      public function temporada(){
            return $this->belongsToMany('App\Temporada','jugar','temporada_id');
      }

}
