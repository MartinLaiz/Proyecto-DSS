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
        $estadio = DB::table('estadio')->where('nombre','like','%UA%')->first();
        //Insertar
        DB::table('equipo')->insert([
            'cif'=>'A27417476',
            'nombre'=>'UA Football Club',
            'presupuesto' =>0,
            'estadio' => $estadio->id
        ]);
        $estadio = DB::table('estadio')->where('nombre','like','%Bernabéu%')->first();
        DB::table('equipo')->insert([
            'cif'=> 'G28034718',
            'nombre' => 'Real Madrid Club de Futbol',
            'presupuesto' =>0,
            'estadio' => $estadio->id
        ]);
        $estadio = DB::table('estadio')->where('nombre','like','%Mendizorroza%')->first();

        DB::table('equipo')->insert([
            'cif'=> 'G28034719',
            'nombre' => 'Deportivo Alavés',
            'presupuesto' =>0,
            'estadio' => $estadio->id
        ]);

           /*$equipos = DB::table('equipo')->get(); // select * from equipo
        foreach($equipos as $equipo)
        {
            var_dump($equipo->id);
            var_dump($equipo->nombre);

        }*/
    }
}
