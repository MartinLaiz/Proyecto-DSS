<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
      protected $table = 'equipo';

      public function usuarios(){
            return $this->hasMany('App\Usuario');
      }
      public function jugadores(){
            return $this->usuarios()->where('rol','=','0');
      }
      public function entrenadores(){
            return $this->usuarios()->where('rol','=','1');
      }
      public function director(){
            return $this->usuarios()->where('rol','=','2');
      }
      public function partidosLocal(){
            return $this->hasMany('App\Partido','equipoLocal_id');
      }
      public function partidosVisitante(){
            return $this->hasMany('App\Partido','equipoVisitante_id');
      }
      public function estadio(){
            return $this->belongsTo('App\Estadio');
      }
}
