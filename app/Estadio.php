<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    protected $table = 'estadio';

    //Un estadio pertenece a un equipo
    public function estadio(){
        return $this->hasOne('App\Equipo');
    }
    public function estadio(){
        return $this->hasMany('App\Partido');
    }

}
