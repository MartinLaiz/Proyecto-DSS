<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
      protected $table = 'usuario';

      protected $dates = ['fNac'];

      public function equipo(){
        return $this->belongsTo('App\Equipo','equipo');
      }
}
