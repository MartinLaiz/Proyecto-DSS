<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
      protected $table = 'partido';

      public function partido(){
            return $this->belongsTo('App\Jugar');
      }


      public function competicion(){
            return $this->belongsToMany('App\Competicion','jugar');
      }

      public function temporada(){
            return $this->belongsToMany('App\Temporada','jugar');
      }

      public function equipoVisitante(){
            return $this->belongsTo('App\Equipo','equipoVisitante_id');
      }

      public function equipoLocal(){
            return $this->belongsTo('App\Equipo','equipoLocal_id');
      }



      public function nombreEquipo($partido){
            return $this-> Partido::join('equipo as team1','partido.equipoLocal','=','team1.id')->
                                    join('equipo as team2','partido.equipoVisitante','=','team2.id')->
                                    select('partido.*','team1.nombreEquipo as equipoLocal','team2.nombreEquipo as equipoVisitante');
      }
}
