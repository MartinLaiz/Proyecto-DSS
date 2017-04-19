<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
      protected $table = 'partido';

      public function partido(){
            return $this->belongsTo('App\Jugar');
      }

      public function equipoVisitante(){
            return $this->belongsTo('App\Equipo','equipoVisitante_id');
      }

      public function equipoLocal(){
            return $this->belongsTo('App\Equipo','equipoLocal_id');
      }
}
