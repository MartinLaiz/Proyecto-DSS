<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'partido';

    public function partido(){
        return $this->belongsToMany('App\Equipo', 'partido', 'equipoLocal', 'equipoVisitante');
    }

    /*public function equipoLocal(){
        return $this->belongsTo('App\Equipo', 'partido','equipoLocal');
    }
    public function equipoVisitante(){
        return $this->belongsTo('App\Equipo');
    }*/
 
}
