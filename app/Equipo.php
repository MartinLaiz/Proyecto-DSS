<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';

    public function entrenador(){
        return $this->hasOne('App\Entrenador','equipo');
    }
    public function jugadores(){
        return $this->hasMany('App\Jugador','equipo');
    }
    public function partido(){
        return $this->hasMany('App\Partido');
    }
    public function estadio(){
        return $this->belongsTo('App\Estadio');
    }

}
