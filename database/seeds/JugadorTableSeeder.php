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
         DB::table('jugador')->delete();

         DB::table('jugador')->insert([
             'DNI'=> '00000000A',
             'nombre' => 'Rafael',
             'apellidos' => 'Soria Diez',
             'edad' => 18,
             'posicion' => 'Delantero',
             'cargo' => 1,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000001A',
             'nombre' => 'Pablo',
             'apellidos' => 'Garcia Villalba',
             'edad' => 18,
             'posicion' => 'Portero',
             'cargo' => 2,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000002A',
             'nombre' => 'Martin',
             'apellidos' => 'Lapiz Goma',
             'edad' => 23,
             'posicion' => 'Medio',
             'cargo' => 3,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000003A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'edad' => 32,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000004A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'edad' => 18,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000005A',
             'nombre' => 'Manuel',
             'apellidos' => 'Alberora Melonar',
             'edad' => 23,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'edad' => 31,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000007A',
             'nombre' => 'Higinio',
             'apellidos' => 'Garcia Garcia',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000008A',
             'nombre' => 'Oscar',
             'apellidos' => 'Garcia Garcia',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000009A',
             'nombre' => 'Gandalf',
             'apellidos' => 'El Gris',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '00000009A',
             'nombre' => 'Harry',
             'apellidos' => 'Potter',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => 'A27417476'

        ],[
             'DNI'=> '000000010A',
             'nombre' => 'Anakin',
             'apellidos' => 'Skywalker',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => 'A27417476'
        ],[
             'DNI'=> '000000011A',
             'nombre' => 'Amador',
             'apellidos' => 'Rivas',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => 'A27417476'

         ]);
        //
    }
}
