<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
     protected $table = 'competicion';


     public function jugar(){
        return $this->belongsToMany('App\Jugar','jugar','id');
      } 
}
