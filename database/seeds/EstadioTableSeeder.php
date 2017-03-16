<?php

use Illuminate\Database\Seeder;

class EstadioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('estadio')->delete();
        $equipo = DB::table('equipo')->where('nombre','like','%UA%')->first();
        $realMadrid = DB::table('equipo')->where('nombre','like','%Real Madrid%')->first();

        // Añadimos un estadio para la UA
        DB::table('estadio')->insert([
            'nombre' => 'UATeam Stadium' ,
            'capacidad' => 64000,
            'equipo' => $equipo->id 
        ]);
        
        //Añadimos el Santiago Bernabéu
        DB::table('estadio')->insert([
            'nombre' => 'Santiago Bernabéu',
            'capacidad' => 81.044,
            'equipo' => $realMadrid->id 
        ]);
    }
}
