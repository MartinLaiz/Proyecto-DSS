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
        'nombre' => 'Adrian' ,
        'apellidos' => 'Montoya Ras' ,
        'edad' => '25' ,
        'numero' => '2' ,
        'equipo' => $equipos->id ]);
    }
}