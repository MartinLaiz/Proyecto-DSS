<?php

use Illuminate\Database\Seeder;

class JugadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('jugador')->delete();

         DB:table('jugador')->insert([
             'DNI'=> '00000000A',
             'nombre' => 'Rafael',
             'apellidos' => 'Soria Diez',
             'edad' => 18,
             'posicion' => 'delantero',
             'cargo' => 1,
             'equipo' => ''
         ]);

         DB:table('jugador')->insert([
             'DNI'=> '00000001A',
             'nombre' => 'Pablo',
             'apellidos' => 'Garcia Villalba',
             'edad' => 18,
             'posicion' => 'portero',
             'cargo' => 2,
             'equipo' => ''
         ]);


         DB:table('jugador')->insert([
             'DNI'=> '00000002A',
             'nombre' => 'Martin',
             'apellidos' => 'Lapiz Goma',
             'edad' => 23,
             'posicion' => 'Medio',
             'cargo' => 3,
             'equipo' => ''
         ]);

         DB:table('jugador')->insert([
             'DNI'=> '00000003A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'edad' => 32,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => ''
         ]);

         DB:table('jugador')->insert([
             'DNI'=> '00000004A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'edad' => 18,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => ''
         ]);



         DB:table('jugador')->insert([
             'DNI'=> '00000005A',
             'nombre' => 'Manuel',
             'apellidos' => 'Alberora Melonar',
             'edad' => 23,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => ''
         ]);


          DB:table('jugador')->insert([
             'DNI'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'edad' => 31,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => ''
         ]);


          DB:table('jugador')->insert([
             'DNI'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'edad' => 31,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => ''
         ]);
        //
    }
}
