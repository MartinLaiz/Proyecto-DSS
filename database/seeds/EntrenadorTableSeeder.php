<?php

use Illuminate\Database\Seeder;

class EntrenadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('entrenador')->delete();
        $equipos = DB::table('equipo')->first();
        // Añadimos una entrada a esta tabla
        DB::table('entrenador')->insert([
        'dni' => '14526784T' ,
        'nombre' => 'Oliver' ,
        'apellidos' => 'Atom' ,
        'edad' => '25' ,
        'numero' => 1 ,
        'equipo' => 1 ]);

         DB::table('entrenador')->insert([
        'dni' => '14526785T' ,
        'nombre' => 'Benji' ,
        'apellidos' => 'Price' ,
        'edad' => '25' ,
        'numero' => 2 ,
        'equipo' => 1 ]);

        //Entrenadores Real Madrid

        DB::table('entrenador')->insert([
        'dni' => '14226784T' ,
        'nombre' => 'Zinedine' ,
        'apellidos' => 'Zidane' ,
        'edad' => '25' ,
        'numero' => 1 ,
        'equipo' => 1 ]);

         DB::table('entrenador')->insert([
        'dni' => '14326785T' ,
        'nombre' => 'David' ,
        'apellidos' => 'Bettoni' ,
        'edad' => '25' ,
        'numero' => 2 ,
        'equipo' => 1 ]);
     
        

    }
}