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

        // Añadimos una entrada a esta tabla
        DB::table('entrenador')->insert([
        'dni' => '14526784T' ,
        'nombre' => 'name@domain.com' ,
        'apellidos' => 'strongpassword' ,
        'edad' => 'name@domain.com' ,
        'numero' => 'name@domain.com' ,
        'equipo' => 'name@domain.com' ]);
    }
}