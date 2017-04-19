<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'partido';

    //protected $dates = ['fecha'];

    /*public function partido(){
        return $this->belongsToMany('App\Equipo', 'partido', 'equipoLocal', 'equipoVisitante');
    }*/

    public function partido(){
        return $this->belongsToMany('App\Jugar','jugar','id');
    }


    public function equipoVisitante(){
        return $this->belongsTo('App\Equipo','equipo','equipoVisitante');
    }

    public function equipoLocal(){
        return $this->belongsTo('App\Equipo','equipo','equipoLocal');
    }
    

    /*public function equipoLocal(){
        return $this->belongsTo('App\Equipo', 'partido','equipoLocal');
    }
    public function equipoVisitante(){
        return $this->belongsTo('App\Equipo');
    }*/

}
