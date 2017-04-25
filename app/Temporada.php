<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
      protected $table = 'temporada';
      protected $dates = ['inicio', 'fin'];



    public function partidos(){
      return $this->belongsToMany('App\Partido','jugar');
    }

    public function competicion(){
      return $this->belongsToMany('App\Competicion','jugar','competicion_id');
    }
}
