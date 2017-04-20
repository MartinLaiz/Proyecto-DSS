<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrocinador extends Model
{
     protected $table = 'patrocinador';
    public function equipo(){
        return $this->hasMany('App\Equipo');
    }

}