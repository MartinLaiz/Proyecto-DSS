<?php

namespace Tests\Feature;

use App\Equipo;
use App\Jugador;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JugadorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testJugador1()
    {
        $jugador = Jugador::where('apellidos','Ramos')->where('nombre','Sergio')->first();
        $equipo = Equipo::where('cif','like','%G28034718%')->first();
        $this->assertEquals($equipo->id,$jugador->equipo);
    }
    public function testJugador2()
    {
        $entrenador = Jugador::where('cargo',1)->where('apellidos','Ramos')->first();
        $equipo = Equipo::where('nombre','like','%Real Madrid%')->first();
        $this->assertEquals($equipo->id,$entrenador->equipo);
    }
}
