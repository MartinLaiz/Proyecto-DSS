<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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
        $resultado = DB::table('entrenador')->join('equipo','entrenador.equipo','=','equipo.id')->select('entrenador')->where('entrenador.dni','=','14526784T');
        $this->assertEquals($resultado->equipo,'');
    }
}
