<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
      protected $table = 'equipo';

      public function director(){
            return $this->hasOne('App\Usuario');
      }
      public function entrenadores(){
            return $this->hasMany('App\Jugador');
      }
      public function jugadores(){
            return $this->hasMany('App\Jugador');
      }
      public function partido(){
            return $this->hasMany('App\Partido');
      }
      public function estadio(){
            return $this->belongsTo('App\Estadio');
      }

}
