<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';

    public function entrenador(){
        return $this->hasMany('App\Entrenador');
    }
    public function jugador(){
        return $this->hasMany('App\Jugador');
    }

}
