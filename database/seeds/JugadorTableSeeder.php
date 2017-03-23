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
             'dni'=> '12345678A',
             'nombre' => 'Rafael',
             'apellidos' => 'Soria Diez',
             'fNac' => 1994/01/01,
             'posicion' => 'Delantero',
             'cargo' => 1,
             'dorsal' =>1,
             'equipo' => $equipo->id
       ]);

       DB::table('jugador')->insert([
             'dni'=> '00000001A',
             'nombre' => 'Pablo',
             'apellidos' => 'Garcia Villalba',
             'fNac' => 1994/01/01,
             'posicion' => 'Portero',
             'cargo' => 2,
             'dorsal' =>2,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000002A',
             'nombre' => 'Martin',
             'apellidos' => 'Laiz Gomez',
             'fNac' => 1994/01/01,
             'posicion' => 'Medio',
             'cargo' => 3,
             'dorsal' =>3,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000003A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'fNac' => 1994/01/01,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>4,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000004A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ros',
             'fNac' => 1994/01/01,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>5,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000005A',
             'nombre' => 'Manuel',
             'apellidos' => 'Alberora Melonar',
             'fNac' => 1994/01/01,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'fNac' => 1994/01/01,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>7,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000007A',
             'nombre' => 'Higinio',
             'apellidos' => 'Garcia Garcia',
             'fNac' => 1994/01/01,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>8,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000008A',
             'nombre' => 'Oscar',
             'apellidos' => 'Garcia Garcia',
             'fNac' => 1994/01/01,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000009A',
             'nombre' => 'Gandalf',
             'apellidos' => 'El Gris',
             'fNac' => 1994/01/01,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '00000019A',
             'nombre' => 'Harry',
             'apellidos' => 'Potter',
             'fNac' => 1994/01/010,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id

       ]);
       DB::table('jugador')->insert([
             'dni'=> '000000010A',
             'nombre' => 'Anakin',
             'apellidos' => 'Skywalker',
             'fNac' => 1994/01/01,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
       ]);
       DB::table('jugador')->insert([
             'dni'=> '000000011A',
             'nombre' => 'Amador',
             'apellidos' => 'Rivas',
             'fNac' => 1994/01/01,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>14,
             'equipo' => $equipo->id

        ]);
        //JUGADORES DEL REAL MADRID
        
        $equipo = DB::table('equipo')->where('nombre','like','%Real Madrid%')->first();
        DB::table('jugador')->insert([
             'dni'=> '000000013A',
             'nombre' => 'Keylor',
             'apellidos' => 'Navas',
             'fNac' => 1986/10/02,
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>1,
             'equipo' => $equipo->id

        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000014A',
             'nombre' => 'Kiko',
             'apellidos' => 'Casilla',
             'fNac' => 1986/12/15,
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>2,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000015A',
             'nombre' => 'Daniel',
             'apellidos' => 'Carvajal',
             'fNac' => 1992/01/11,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>3,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000016A',
             'nombre' => 'Pepe',
             'apellidos' => 'Képler Lima',
             'fNac' => 1983/02/26,
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>4,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000030A',
             'nombre' => 'Sergio',
             'apellidos' => 'Ramos',
             'fNac' => 1986/03/30,
             'posicion' => 'Defensa',
             'cargo' => 1,
             'dorsal' =>5,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000017A',
             'nombre' => 'Raphaël',
             'apellidos' => 'Varane',
             'fNac' => 1993/04/25,
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000018A',
             'nombre' => 'Nacho',
             'apellidos' => 'Fernández',
             'fNac' => 1990/01/18,
             'posicion' => 'Defensa',
             'cargo' => 10,
             'dorsal' =>7,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000019A',
             'nombre' => 'Marcelo',
             'apellidos' => 'Vieira',
             'fNac' => 1988/05/12,
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>8,
             'equipo' => $equipo->id
        ]);
        

        DB::table('jugador')->insert([
             'dni'=> '000000020A',
             'nombre' => 'Toni',
             'apellidos' => 'Kross',
             'fNac' => 1990/01/04,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000021A',
             'nombre' => 'James',
             'apellidos' => 'Rodíguez',
             'fNac' => 1991/07/12,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000022A',
             'nombre' => 'Carlos Henrique',
             'apellidos' => 'Casemiro',
             'fNac' => 1992/02/23,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000023A',
             'nombre' => 'Mateo',
             'apellidos' => 'Kovačić',
             'fNac' => 1994/05/26,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>12,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000024A',
             'nombre' => 'Luka',
             'apellidos' => 'Modrić',
             'fNac' => 1985/9/9,
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000025A',
             'nombre' => 'Cristiano',
             'apellidos' => 'Ronaldo',
             'fNac' => 1994/05/26,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>14,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000026A',
             'nombre' => 'Karim',
             'apellidos' => 'Benzema',
             'fNac' => 1980/01/01,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>15,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000027A',
             'nombre' => 'Gareth',
             'apellidos' => 'Bale',
             'fNac' => 1980/01/01,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>16,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000029A',
             'nombre' => 'Lucas',
             'apellidos' => 'Vázquez',
             'fNac' => 25,
             'posicion' => 'Delantero',
             'cargo' => 1980/01/01,
             'dorsal' =>17,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000028A',
             'nombre' => 'Álvaro',
             'apellidos' => 'Morata',
             'fNac' => 1980/01/01,
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>19,
             'equipo' => $equipo->id
        ]);

        //Jugadores F.C Barcelona id= 3
    }
}
