<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
      protected $table = 'competicion';



      public function jugar(){
            return $this->hasMany('App\Jugar');
      } 


      /*public function partidos(){
            return $this->belongsToMany('App\Partido','jugar','competicion_id','temporada_id'); //->withPivot('role_id')
      }


      public function temporadas(){
            return $this->belongsToMany('App\Temporada','jugar','partido_id','competicion_id'); //->withPivot('user_id') if you need saving
      }*/

}
