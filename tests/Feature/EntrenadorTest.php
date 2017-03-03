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
    public function testEntrenador()
    {
        $entrenador = Entrenador::where('nombre','Oliver')->where('apellidos','Atom')->first();
        $equipo = Equipo::where('nombre','like','%UA%')->first();
        $this->assertEquals($equipo->id,$entrenador->equipo);
    }
}
