<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'entrenador';
    protected $primaryKey = 'dni';

    public $timestamps = false;

}
