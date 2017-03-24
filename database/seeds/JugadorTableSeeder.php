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
            $formato = 'Y/m/d';
            DB::table('jugador')->delete();
            DB::table('VerNifEntrenador');

            $equipo = DB::table('equipo')->where('nombre','like','%UA%')->first();
            $fMin = 315532800;
            $fMax = 913420800;
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '12345678A',
                  'nombre' => 'Rafael',
                  'apellidos' => 'Soria Diez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 1,
                  'dorsal' =>1,
                  'equipo' => $equipo->id
            ]);
      $fecha = mt_rand($fMin, $fMax);
      DB::table('jugador')->insert([
             'dni'=> '00000001A',
             'nombre' => 'Pablo',
             'apellidos' => 'Garcia Villalba',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Portero',
             'cargo' => 2,
             'dorsal' =>2,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000002A',
             'nombre' => 'Martin',
             'apellidos' => 'Laiz Gomez',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Medio',
             'cargo' => 3,
             'dorsal' =>3,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000003A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ras',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>4,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000004A',
             'nombre' => 'Adrian',
             'apellidos' => 'Montoya Ros',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>5,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000005A',
             'nombre' => 'Manuel',
             'apellidos' => 'Alberora Melonar',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000006A',
             'nombre' => 'Manolo',
             'apellidos' => 'Garcia Garcia',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>7,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000007A',
             'nombre' => 'Higinio',
             'apellidos' => 'Garcia Garcia',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>8,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000008A',
             'nombre' => 'Oscar',
             'apellidos' => 'Garcia Garcia',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000009A',
             'nombre' => 'Gandalf',
             'apellidos' => 'El Gris',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '00000019A',
             'nombre' => 'Harry',
             'apellidos' => 'Potter',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id

       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '000000010A',
             'nombre' => 'Anakin',
             'apellidos' => 'Skywalker',
             'fNac' => date($formato,$fecha),
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
       ]);
       $fecha = mt_rand($fMin, $fMax);
       DB::table('jugador')->insert([
             'dni'=> '000000011A',
             'nombre' => 'Amador',
             'apellidos' => 'Rivas',
             'fNac' => date($formato,$fecha),
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
             'fNac' => '1986/10/02',
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>1,
             'equipo' => $equipo->id

        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000014A',
             'nombre' => 'Kiko',
             'apellidos' => 'Casilla',
             'fNac' => '1986/12/15',
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>2,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000015A',
             'nombre' => 'Daniel',
             'apellidos' => 'Carvajal',
             'fNac' => '1992/01/11',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>3,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000016A',
             'nombre' => 'Pepe',
             'apellidos' => 'Képler Lima',
             'fNac' => '1983/02/26',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>4,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000030A',
             'nombre' => 'Sergio',
             'apellidos' => 'Ramos',
             'fNac' => '1986/03/30',
             'posicion' => 'Defensa',
             'cargo' => 1,
             'dorsal' =>5,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000017A',
             'nombre' => 'Raphaël',
             'apellidos' => 'Varane',
             'fNac' => '1993/04/25',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000018A',
             'nombre' => 'Nacho',
             'apellidos' => 'Fernández',
             'fNac' => '1990/01/18',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>7,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000019A',
             'nombre' => 'Marcelo',
             'apellidos' => 'Vieira',
             'fNac' => '1988/05/12',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>8,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000020A',
             'nombre' => 'Toni',
             'apellidos' => 'Kross',
             'fNac' => '1990/01/04',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000021A',
             'nombre' => 'James',
             'apellidos' => 'Rodíguez',
             'fNac' => '1991/07/12',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000022A',
             'nombre' => 'Carlos Henrique',
             'apellidos' => 'Casemiro',
             'fNac' => '1992/02/23',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000023A',
             'nombre' => 'Mateo',
             'apellidos' => 'Kovačić',
             'fNac' => '1994/05/26',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>12,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000024A',
             'nombre' => 'Luka',
             'apellidos' => 'Modrić',
             'fNac' => '1985/9/9',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000025A',
             'nombre' => 'Cristiano',
             'apellidos' => 'Ronaldo',
             'fNac' => '1994/05/26',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>14,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000026A',
             'nombre' => 'Karim',
             'apellidos' => 'Benzema',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>15,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000027A',
             'nombre' => 'Gareth',
             'apellidos' => 'Bale',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>16,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000029A',
             'nombre' => 'Lucas',
             'apellidos' => 'Vázquez',
             'fNac' => '1990/03/25',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>17,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000028A',
             'nombre' => 'Álvaro',
             'apellidos' => 'Morata',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>19,
             'equipo' => $equipo->id
        ]);

        //Jugadores Alaves
        $equipo = DB::table('equipo')->where('nombre','like','%Deportivo Alavés%')->first();


        DB::table('jugador')->insert([
             'dni'=> '00100030A',
             'nombre' => 'Fernando',
             'apellidos' => 'Pacheco',
             'fNac' => '1992/05/18',
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>1,
             'equipo' => $equipo->id

        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000031A',
             'nombre' => 'Rodrigo',
             'apellidos' => 'Ely',
             'fNac' => ' 1993/05/18',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>2,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000032A',
             'nombre' => 'Raúl',
             'apellidos' => 'Sanchez',
             'fNac' => '1985/01/01',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>3,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000033A',
             'nombre' => 'Alexis',
             'apellidos' => 'Romero',
             'fNac' => '1985/01/01',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>4,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000034A',
             'nombre' => 'Víctor',
             'apellidos' => 'Laguardia',
             'fNac' => '1986/03/30',
             'posicion' => 'Defensa',
             'cargo' => 1,
             'dorsal' =>5,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000035A',
             'nombre' => 'Marcos',
             'apellidos' => 'Llorente',
             'fNac' => '1994/04/25',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000036A',
             'nombre' => 'Rubén',
             'apellidos' => 'Sobrino',
             'fNac' => '1990/01/18',
             'posicion' => 'Defensa',
             'cargo' => 10,
             'dorsal' =>7,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000037A',
             'nombre' => 'Víctor',
             'apellidos' => 'Camarasa',
             'fNac' => '1988/05/12',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>8,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000038A',
             'nombre' => 'Christian',
             'apellidos' => 'Santos',
             'fNac' => '1990/01/04',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000039A',
             'nombre' => 'Óscar',
             'apellidos' => 'Romero',
             'fNac' => '1991/07/12',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000040A',
             'nombre' => 'Ibai',
             'apellidos' => 'Casemiro Gómez',
             'fNac' => '1992/02/23',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000041A',
             'nombre' => 'Mateo',
             'apellidos' => 'Adrián',
             'fNac' => '1994/05/26',
             'posicion' => 'Ortolà',
             'cargo' => 0,
             'dorsal' =>12,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000042A',
             'nombre' => 'Théo',
             'apellidos' => 'Hernández',
             'fNac' => '1985/9/9',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '000000043A',
             'nombre' => 'Daniel',
             'apellidos' => 'Torres',
             'fNac' => '1994/05/26',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>14,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000044A',
             'nombre' => 'Edgar',
             'apellidos' => 'Montes',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>15,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '000000045A',
             'nombre' => 'Gaizka',
             'apellidos' => 'Toquero',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>16,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '000000046A',
             'nombre' => 'Manu',
             'apellidos' => 'García',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>17,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '000000047A',
             'nombre' => 'Deyverson',
             'apellidos' => 'Deyverson',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>19,
             'equipo' => $equipo->id
        ]);


        //jugadores de bilbao
       $equipo = DB::table('equipo')->where('nombre','like','%Athletic Club de Bilbao%')->first();


        DB::table('jugador')->insert([
             'dni'=> '00000000B',
             'nombre' => 'Gorka',
             'apellidos' => 'Iraizoz',
             'fNac' => '1992/05/18',
             'posicion' => 'Portero',
             'cargo' => 0,
             'dorsal' =>1,
             'equipo' => $equipo->id

        ]);

         DB::table('jugador')->insert([
             'dni'=> '00000001B',
             'nombre' => 'Eneko',
             'apellidos' => 'Bóveda',
             'fNac' =>  '1993/05/18',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>2,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000002B',
             'nombre' => 'Gorka',
             'apellidos' => 'Elustondo',
             'fNac' => '1985/01/01',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>3,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '00000003B',
             'nombre' => 'Aymeric',
             'apellidos' => 'Laporte',
             'fNac' => '1985/01/01',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>4,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '00000004B',
             'nombre' => 'Javier',
             'apellidos' => 'Eraso',
             'fNac' => '1986/03/30',
             'posicion' => 'Defensa',
             'cargo' => 1,
             'dorsal' =>5,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '00000005B',
             'nombre' => 'Mikel',
             'apellidos' => 'San José',
             'fNac' => '1994/04/25',
             'posicion' => 'Defensa',
             'cargo' => 0,
             'dorsal' =>6,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '00000006B',
             'nombre' => 'Beñat',
             'apellidos' => 'Iturraspe',
             'fNac' => '1990/01/18',
             'posicion' => 'Defensa',
             'cargo' => 10,
             'dorsal' =>7,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '00000007B',
             'nombre' => 'Ander',
             'apellidos' => 'Iturraspe',
             'fNac' => '1988/05/12',
             'posicion' => 'Defensa',
             'cargo' => 3,
             'dorsal' =>8,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '00000008B',
             'nombre' => 'Iker',
             'apellidos' => 'Muniain',
             'fNac' => '1990/01/04',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>9,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000009B',
             'nombre' => 'Iñaki',
             'apellidos' => 'Williams',
             'fNac' => '1991/07/12',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>10,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000010B',
             'nombre' => 'Markel',
             'apellidos' => 'Susaeta',
             'fNac' => '1992/02/23',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>11,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000011B',
             'nombre' => 'Íñigo',
             'apellidos' => 'Lekue',
             'fNac' => '1994/05/26',
             'posicion' => 'Ortolà',
             'cargo' => 0,
             'dorsal' =>12,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '00000012B',
             'nombre' => 'Xabier',
             'apellidos' => 'Etxeita',
             'fNac' => '1985/9/9',
             'posicion' => 'Medio',
             'cargo' => 0,
             'dorsal' =>13,
             'equipo' => $equipo->id
        ]);


        DB::table('jugador')->insert([
             'dni'=> '00000013B',
             'nombre' => 'Mikel',
             'apellidos' => 'Rico',
             'fNac' => '1994/05/26',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>14,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000015B',
             'nombre' => 'Aritz',
             'apellidos' => 'Aduriz',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>15,
             'equipo' => $equipo->id
        ]);

        DB::table('jugador')->insert([
             'dni'=> '00000016B',
             'nombre' => 'Raúl',
             'apellidos' => 'García',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>16,
             'equipo' => $equipo->id
        ]);


         DB::table('jugador')->insert([
             'dni'=> '00000017B',
             'nombre' => 'Mikel',
             'apellidos' => 'Balenziaga',
             'fNac' => 25,
             'posicion' => 'Delantero',
             'cargo' => '1980/01/01',
             'dorsal' =>17,
             'equipo' => $equipo->id
        ]);

         DB::table('jugador')->insert([
             'dni'=> '00000018B',
             'nombre' => 'Enric',
             'apellidos' => 'Saborit',
             'fNac' => '1980/01/01',
             'posicion' => 'Delantero',
             'cargo' => 0,
             'dorsal' =>19,
             'equipo' => $equipo->id
        ]);

    }
}
