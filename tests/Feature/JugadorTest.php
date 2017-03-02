<?php

namespace Tests\Feature;

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
    public function testExample()
    {
        echo "Jugadores del equipo %UA%";
        $result = DB::table('jugador as j')->join('equipo as e','j.equipo','=','e.id')->select('e.nombre as equipo','j.nombre','j.apellidos')->where('e.nombre','like','%UA%')->get();
        

    }
}
