<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EntrenadorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $resultado = DB::table('entrenador')->join('equipo','entrenador.equipo','=','equipo.id')->select('entrenador')->where('entrenador.nombre','=','Oliver')->where('entrenador.apellidos','=','Atom')->first();
        $this->assertEquals('UA Football Club',$resultado->equipo);
    }
}
