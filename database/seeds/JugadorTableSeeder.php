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
         DB::table('VerNifEntrenador');
         
         $equipo = DB::table('equipo')->where('nombre','like','%UA%')->first();
         DB::table('jugador')->insert([
             'dni'=> '00000000A',
             'nombre' => 'Rafael',
             'apellidos' => 'Soria Diez',
             'edad' => 18,
             'posicion' => 'Delantero',
             'cargo' => 1,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000001A',
             'nombre' => 'Pablo',
             'apellidos' => 'Garcia Villalba',
             'edad' => 18,
             'posicion' => 'Portero',
             'cargo' => 2,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000002A',
             'nombre' => 'Martin',
             'apellidos' => 'Laiz Gomez',
             'edad' => 23,
             'posicion' => 'Medio',
             'cargo' => 3,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000003A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'edad' => 32,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000004A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ros',
             'edad' => 18,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000005A',
             'nombre' => 'Manuel',
             'apellidos' => 'Alberora Melonar',
             'edad' => 23,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'edad' => 31,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000007A',
             'nombre' => 'Higinio',
             'apellidos' => 'Garcia Garcia',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000008A',
             'nombre' => 'Oscar',
             'apellidos' => 'Garcia Garcia',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000009A',
             'nombre' => 'Gandalf',
             'apellidos' => 'El Gris',
             'edad' => 20,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000019A',
             'nombre' => 'Harry',
             'apellidos' => 'Potter',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id

       ]);
       DB::table('jugador')->insert([
             'dni'=> '000000010A',
             'nombre' => 'Anakin',
             'apellidos' => 'Skywalker',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '000000011A',
             'nombre' => 'Amador',
             'apellidos' => 'Rivas',
             'edad' => 20,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id

        ]);
        //JUGADORES DEL REAL MADRID
        
        $equipo = DB::table('equipo')->where('nombre','like','%Real Madrid%')->first();
        DB::table('jugador')->insert([
             'dni'=> '000000013A',
             'nombre' => 'Keylor',
             'apellidos' => 'Navas',
             'edad' => 30,
             'posicion' => 'Portero',
             'cargo' => 0,
             'equipo' => $equipo->id

        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000014A',
             'nombre' => 'Kiko',
             'apellidos' => 'Casilla',
             'edad' => 30,
             'posicion' => 'Portero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000015A',
             'nombre' => 'Daniel',
             'apellidos' => 'Carvajal',
             'edad' => 25,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000016A',
             'nombre' => 'Pepe',
             'apellidos' => 'Képler Lima',
             'edad' => 34,
             'posicion' => 'Defensa',
             'cargo' => 3,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000030A',
             'nombre' => 'Sergio',
             'apellidos' => 'Ramos',
             'edad' => 30,
             'posicion' => 'Defensa',
             'cargo' => 1,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000017A',
             'nombre' => 'Raphaël',
             'apellidos' => 'Varane',
             'edad' => 24,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000018A',
             'nombre' => 'Nacho',
             'apellidos' => 'Fernández',
             'edad' => 27,
             'posicion' => 'Defensa',
             'cargo' => 10,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000019A',
             'nombre' => 'Marcelo',
             'apellidos' => 'Vieira',
             'edad' => 28,
             'posicion' => 'Defensa',
             'cargo' => 3,
             'equipo' => $equipo->id
        ]);
        

        DB::table('jugador')->insert([
             'dni'=> '000000020A',
             'nombre' => 'Toni',
             'apellidos' => 'Kross',
             'edad' => 27,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000021A',
             'nombre' => 'James',
             'apellidos' => 'Rodíguez',
             'edad' => 25,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000022A',
             'nombre' => 'Carlos Henrique',
             'apellidos' => 'Casemiro',
             'edad' => 25,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000023A',
             'nombre' => 'Mateo',
             'apellidos' => 'Kovačić',
             'edad' => 22,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000024A',
             'nombre' => 'Luka',
             'apellidos' => 'Modrić',
             'edad' => 31,
             'posicion' => 'Medio',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000025A',
             'nombre' => 'Cristiano',
             'apellidos' => 'Ronaldo',
             'edad' => 32,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000026A',
             'nombre' => 'Karim',
             'apellidos' => 'Benzema',
             'edad' => 29,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000027A',
             'nombre' => 'Gareth',
             'apellidos' => 'Bale',
             'edad' => 27,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000029A',
             'nombre' => 'Lucas',
             'apellidos' => 'Vázquez',
             'edad' => 25,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000028A',
             'nombre' => 'Álvaro',
             'apellidos' => 'Morata',
             'edad' => 24,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'equipo' => $equipo->id
        ]);

        //Jugadores F.C Barcelona id= 3
    }
}
