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


        // Añadimos un estadio para la UA
        DB::table('estadio')->insert([
            'nombre' => 'UATeam Stadium' ,
            'capacidad' => 64000
        ]);
        
        //Añadimos el Santiagos Bernabéu
        DB::table('estadio')->insert([
            'nombre' => 'Santiago Bernabéu',
            'capacidad' => 81044
        ]);


        DB::table('estadio')->insert([
            'nombre' => 'Estadio de Mendizorroza ',
            'capacidad' => 19840
        ]);

        DB::table('estadio')->insert([
            'nombre' => 'San Mamés ',
            'capacidad' => 53289
        ]);
    }
}
