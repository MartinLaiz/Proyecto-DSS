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
        $estadio = DB::table('estadio')->where('nombre','like','%Libre%')->first();
        //Insertar
        $patrocinador = DB::table('patrocinador')->where('nombre','like','%libre%')->first();

        DB::table('equipo')->insert([
            'cif'=>'000000000',
            'nombreEquipo'=>'Libre',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/libre.png",
            'patrocinador_id' => $patrocinador->id
        ]);

        $estadio = DB::table('estadio')->where('nombre','like','%UA%')->first();
        $patrocinador = DB::table('patrocinador')->where('nombre','like','%BBVA%')->first();

        DB::table('equipo')->insert([
            'cif'=>'A27417476',
            'nombreEquipo'=>'UA Football Club',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => 'images/escudos/Escudo.png',
            'patrocinador_id' => $patrocinador->id
        ]);

        $patrocinador = DB::table('patrocinador')->where('nombre','like','%libre%')->first();
        $estadio = DB::table('estadio')->where('nombre','like','%Bernabéu%')->first();
        DB::table('equipo')->insert([
            'cif'=> 'G28034718',
            'nombreEquipo' => 'Real Madrid Club de Futbol',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/realmadrid.png",
            'patrocinador_id' => $patrocinador->id
        ]);
        $estadio = DB::table('estadio')->where('nombre','like','%Mendizorroza%')->first();

        DB::table('equipo')->insert([
            'cif'=> 'G28034719',
            'nombreEquipo' => 'Deportivo Alavés',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/alaves.png",
            'patrocinador_id' => $patrocinador->id
        ]);

        $estadio = DB::table('estadio')->where('nombre','like','%Mamés%')->first();

         DB::table('equipo')->insert([
            'cif'=> 'G28034720',
            'nombreEquipo' => 'Athletic Club de Bilbao',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/bilbao.png",
            'patrocinador_id' => $patrocinador->id
        ]);

        $estadio = DB::table('estadio')->where('nombre','like','%Cármenes%')->first();
        DB::table('equipo')->insert([
            'cif'=> 'G28034721',
            'nombreEquipo' => 'Granada Club de Fútbol',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/granada.png",
            'patrocinador_id' => $patrocinador->id
        ]);

        $estadio = DB::table('estadio')->where('nombre','like','%Villamarín%')->first();
        DB::table('equipo')->insert([
            'cif'=> 'G28034722',
            'nombreEquipo' => 'Real Betis Balompié',
            'presupuesto' =>0,
            'estadio_id' => $estadio->id,
            'logo' => "images/escudos/betis.png",
            'patrocinador_id' => $patrocinador->id
        ]);

           /*$equipos = DB::table('equipo')->get(); // select * from equipo
        foreach($equipos as $equipo)
        {
            var_dump($equipo->id);
            var_dump($equipo->nombreEquipo);

        }*/
    }
}
