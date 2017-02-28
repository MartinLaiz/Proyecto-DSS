<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugador';
    protected $primaryKey = 'dni';

    public $timestamps = false;
    //
}
