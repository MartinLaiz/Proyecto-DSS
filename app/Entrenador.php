<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'entrenador';

    public function equipo(){
        return $this->belongsTo('App\Equipo');
    }

}
