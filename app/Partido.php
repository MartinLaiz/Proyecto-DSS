<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
      protected $table = 'partido';

      public function jugar(){
            return $this->hasMany('App\Jugar');
      }

       public function jugarTemporadaActual(){
            $temporadaActual = Temporada::with('temporadaActual')->first();

            return $this->jugar()->where('temporada_id','=', $temporadaActual->id);
      }


      public function competiciones(){
            return $this->belongsToMany('App\Competicion','jugar','partido_id','temporada_id'); //->withPivot('role_id')
      }


      public function temporadas(){
            return $this->belongsToMany('App\Temporada','jugar','partido_id','competicion_id')->withPivot('temporada_id');
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
