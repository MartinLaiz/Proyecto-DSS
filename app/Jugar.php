<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
      protected $table = 'jugar';

      protected $dates = ['fecha'];

      public function competicion(){
            return $this->belongsTo('App\Competicion','competicion_id','id');
      }

      public function partido(){
            return $this->belongsTo('App\Partido');
      }
}
