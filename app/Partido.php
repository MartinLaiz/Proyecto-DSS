<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'partido';

    public function equipoLocal(){
        return $this->belongsTo('App\Equipo');
    }
    public function equipoVisitante(){
        return $this->belongsTo('App\Equipo');
    }
    public function equipoVisitante(){
        return $this->belongsTo('App\Estadio');
    }
}
