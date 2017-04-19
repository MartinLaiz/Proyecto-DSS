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
            return $this->belongsToMany('App\Partido','partido','equipoLocal','equipoVisitante');
      }

      public function estadio(){
            return $this->belongsTo('App\Estadio');
      }

}
