<?php

use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borrar datos
        DB::table('equipo')->delete();

        //Insertar
        DB::table('equipo')->insert([
            'cif'=>'A27417476',
            'nombre'=>'UA Football Club'
        ]);

        DB::table('equipo')->insert([
            'cif'=> 'G28034718',
            'nombre' => 'Real Madrid Club de Futbol'
        ]);

           /*$equipos = DB::table('equipo')->get(); // select * from equipo
        foreach($equipos as $equipo)
        {
            var_dump($equipo->id);
            var_dump($equipo->nombre);

        }*/
    }
}
