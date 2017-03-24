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
        DB::table('VerNifJugador');
        
        $equipo = DB::table('equipo')->where('nombre','like','%UA%')->first();
        // Añadimos una entrada a esta tabla
        DB::table('entrenador')->insert([
        'dni' => '145267853T' ,
        'nombre' => 'Oliver' ,
        'apellidos' => 'Atom' ,
        'fNac' => 1994/01/01 ,
        'numero' => 1 ,
        'equipo' => $equipo->id ]);

        //Entrenadores Real Madrid
        $equipo = DB::table('equipo')->where('nombre','like','%Real Madrid%')->first();
        DB::table('entrenador')->insert([
        'dni' => '14226784T' ,
        'nombre' => 'Zinedine' ,
        'apellidos' => 'Zidane' ,
        'fNac' => 1994/01/01 ,
        'numero' => 1 ,
        'equipo' => $equipo->id ]);

     

     //Entrenadores Alaves
        $equipo = DB::table('equipo')->where('nombre','like','%Deportivo Alavés%')->first();

        DB::table('entrenador')->insert([
        'dni' => '14224534T' ,
        'nombre' => 'Mauricio ' ,
        'apellidos' => 'Pellegrino' ,
        'fNac' => 1994/01/01 ,
        'numero' => 1 ,
        'equipo' => $equipo->id ]);


        $equipo = DB::table('equipo')->where('nombre','like','%Athletic Club de Bilbao%')->first();

        DB::table('entrenador')->insert([
        'dni' => '14224535T' ,
        'nombre' => 'Ernesto ' ,
        'apellidos' => 'Valverde' ,
        'fNac' => 1994/01/01 ,
        'numero' => 1 ,
        'equipo' => $equipo->id ]);
        
        

    }
}