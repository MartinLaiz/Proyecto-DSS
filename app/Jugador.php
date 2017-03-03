<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugador';
    
    public function equipo(){
        return $this->belongsTo('App\Equipo');
    }

}
