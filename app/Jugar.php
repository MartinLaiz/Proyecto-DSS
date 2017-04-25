<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
      protected $table = 'jugar';

      protected $dates = ['fecha'];

      public function partido(){
            $this->belongsTo('App\Partido');
      }
}
