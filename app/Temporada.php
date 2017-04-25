<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
      protected $table = 'temporada';
      protected $dates = ['inicio', 'fin'];



    public function partido(){
      return $this->belongsToMany('App\Partido','jugar','partido_id');
    }

    public function competicion(){
      return $this->belongsToMany('App\Competicion','jugar','competicion_id');
    }
}
