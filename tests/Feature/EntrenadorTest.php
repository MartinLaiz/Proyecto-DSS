<?php

namespace Tests\Feature;

use App\Entrenador;
use App\Equipo;
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
    public function testEntrenador1()
    {
        $entrenador = Entrenador::where('nombre','Oliver')->where('apellidos','Atom')->first();
        $equipo = Equipo::where('nombre','like','%UA%')->first();
        $this->assertEquals($equipo->id,$entrenador->equipo);
    }
    public function testEntrenador2()
    {
        $entrenador = Entrenador::where('nombre','Zinedine')->where('apellidos','Zidane')->first();
        $equipo = Equipo::where('nombre','like','%Real Madrid%')->first();
        $this->assertEquals($equipo->id,$entrenador->equipo);
    }
}
