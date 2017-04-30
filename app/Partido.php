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

      public function estadio(){
            return $this->belongsTo('App\Estadio');
      }

      public function equipoVisitante(){
            return $this->belongsTo('App\Equipo','equipoVisitante_id');
      }

      public function equipoLocal(){
            return $this->belongsTo('App\Equipo','equipoLocal_id');
      }


      

}
