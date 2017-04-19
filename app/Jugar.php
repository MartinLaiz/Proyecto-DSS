<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugar extends Model
{
     protected $table = 'jugar';

  

	public function competicion(){

		return $this->belongsTo('App\Competicion','competicion','id_competicion');

	}

	public function partido(){

		return $this->belongsTo('App\Partido','partido','id_partido');

	}

    public function temporada(){

		return $this->belongsTo('App\Temporada','temporada','id_temporada');

	}
}
