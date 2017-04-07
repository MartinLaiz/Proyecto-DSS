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

            $equipo = DB::table('equipo')->where('nombreEquipo','like','%UA%')->first();
            $fMin = 315532800;
            $fMax = 913420800;
            
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000201A',
                  'nombre' => 'Pablo',
                  'apellidos' => 'Garcia Villalba',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 2,
                  'dorsal' =>1,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00300001A',
                  'nombre' => 'Fernando',
                  'apellidos' => 'Alonso',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' =>19,
                  'dorsal' =>25,
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
                  'dorsal' =>72,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00010006A',
                  'nombre' => 'Jack',
                  'apellidos' => 'Sparrow',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>73,
                  'equipo' => $equipo->id
            ]);


             $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000016A',
                  'nombre' => 'Jose Luis',
                  'apellidos' => 'Povedilla',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);


              $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00002006A',
                  'nombre' => 'Manolo',
                  'apellidos' => 'Garcia Garcia',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>57,
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
                  'dorsal' =>34,
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
                  'dorsal' =>38,
                  'equipo' => $equipo->id
            ]);


            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00300007A',
                  'nombre' => 'Guamelo',
                  'apellidos' => 'Sanchez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>28,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '30000007A',
                  'nombre' => 'Jose',
                  'apellidos' => 'Mota',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>18,
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
                  'dni'=> '01000009A',
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
                  'dni'=> '001000010A',
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

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '12345678A',
                  'nombre' => 'Rafael',
                  'apellidos' => 'Soria Diez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 1,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);



            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '11345678A',
                  'nombre' => 'Gimenez',
                  'apellidos' => 'Soria Once',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 1,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
        //JUGADORES DEL REAL MADRID

            $equipo = DB::table('equipo')->where('nombreEquipo','like','%Real Madrid%')->first();
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000013A',
                  'nombre' => 'Keylor',
                  'apellidos' => 'Navas',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>1,
                  'equipo' => $equipo->id

            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000014A',
                  'nombre' => 'Kiko',
                  'apellidos' => 'Casilla',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>2,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000015A',
                  'nombre' => 'Daniel',
                  'apellidos' => 'Carvajal',
                  'fNac' =>  date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>3,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000016A',
                  'nombre' => 'Pepe',
                  'apellidos' => 'Képler Lima',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>4,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000030A',
                  'nombre' => 'Sergio',
                  'apellidos' => 'Ramos',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 1,
                  'dorsal' =>5,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000017A',
                  'nombre' => 'Raphaël',
                  'apellidos' => 'Varane',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>6,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000018A',
                  'nombre' => 'Nacho',
                  'apellidos' => 'Fernández',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000019A',
                  'nombre' => 'Marcelo',
                  'apellidos' => 'Vieira',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>8,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000020A',
                  'nombre' => 'Toni',
                  'apellidos' => 'Kroos',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>9,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000021A',
                  'nombre' => 'James',
                  'apellidos' => 'Rodíguez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>10,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000022A',
                  'nombre' => 'Carlos Henrique',
                  'apellidos' => 'Casemiro',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>11,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000023A',
                  'nombre' => 'Mateo',
                  'apellidos' => 'Kovačić',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>12,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000024A',
                  'nombre' => 'Luka',
                  'apellidos' => 'Modrić',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>13,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
             DB::table('jugador')->insert([
                  'dni'=> '100000024A',
                  'nombre' => 'Isco',
                  'apellidos' => 'Alarcon',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>23,
                  'equipo' => $equipo->id
            ]);


            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000025A',
                  'nombre' => 'Cristiano',
                  'apellidos' => 'Ronaldo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>14,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000026A',
                  'nombre' => 'Karim',
                  'apellidos' => 'Benzema',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000027A',
                  'nombre' => 'Gareth',
                  'apellidos' => 'Bale',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>16,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000029A',
                  'nombre' => 'Lucas',
                  'apellidos' => 'Vázquez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>17,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000028A',
                  'nombre' => 'Álvaro',
                  'apellidos' => 'Morata',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>19,
                  'equipo' => $equipo->id
            ]);

            //Jugadores Alaves
            $equipo = DB::table('equipo')->where('nombreEquipo','like','%Deportivo Alavés%')->first();

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00100030A',
                  'nombre' => 'Fernando',
                  'apellidos' => 'Pacheco',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>1,
                  'equipo' => $equipo->id

            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000031A',
                  'nombre' => 'Rodrigo',
                  'apellidos' => 'Ely',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>2,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000032A',
                  'nombre' => 'Raúl',
                  'apellidos' => 'Sanchez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>3,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000033A',
                  'nombre' => 'Alexis',
                  'apellidos' => 'Romero',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>4,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000034A',
                  'nombre' => 'Víctor',
                  'apellidos' => 'Laguardia',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 1,
                  'dorsal' =>5,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000035A',
                  'nombre' => 'Marcos',
                  'apellidos' => 'Llorente',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>6,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000036A',
                  'nombre' => 'Rubén',
                  'apellidos' => 'Sobrino',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 10,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000037A',
                  'nombre' => 'Víctor',
                  'apellidos' => 'Camarasa',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>8,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000038A',
                  'nombre' => 'Christian',
                  'apellidos' => 'Santos',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>9,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000039A',
                  'nombre' => 'Óscar',
                  'apellidos' => 'Romero',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>10,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000040A',
                  'nombre' => 'Ibai',
                  'apellidos' => 'Casemiro Gómez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>11,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000041A',
                  'nombre' => 'Mateo',
                  'apellidos' => 'Adrián',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Ortolà',
                  'cargo' => 0,
                  'dorsal' =>12,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000042A',
                  'nombre' => 'Théo',
                  'apellidos' => 'Hernández',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>13,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000043A',
                  'nombre' => 'Daniel',
                  'apellidos' => 'Torres',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>14,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000044A',
                  'nombre' => 'Edgar',
                  'apellidos' => 'Montes',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000045A',
                  'nombre' => 'Gaizka',
                  'apellidos' => 'Toquero',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>16,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000046A',
                  'nombre' => 'Manu',
                  'apellidos' => 'García',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>17,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000047A',
                  'nombre' => 'Deyverson',
                  'apellidos' => 'Deyverson',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>19,
                  'equipo' => $equipo->id
            ]);


            //jugadores de bilbao
            $equipo = DB::table('equipo')->where('nombreEquipo','like','%Athletic Club de Bilbao%')->first();

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000000B',
                  'nombre' => 'Gorka',
                  'apellidos' => 'Iraizoz',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>1,
                  'equipo' => $equipo->id

            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000001B',
                  'nombre' => 'Eneko',
                  'apellidos' => 'Bóveda',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>2,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000002B',
                  'nombre' => 'Gorka',
                  'apellidos' => 'Elustondo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>3,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000003B',
                  'nombre' => 'Aymeric',
                  'apellidos' => 'Laporte',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>4,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000004B',
                  'nombre' => 'Javier',
                  'apellidos' => 'Eraso',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 1,
                  'dorsal' =>5,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000005B',
                  'nombre' => 'Mikel',
                  'apellidos' => 'San José',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>6,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000006B',
                  'nombre' => 'Beñat',
                  'apellidos' => 'Iturraspe',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 10,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000007B',
                  'nombre' => 'Ander',
                  'apellidos' => 'Iturraspe',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>8,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000008B',
                  'nombre' => 'Iker',
                  'apellidos' => 'Muniain',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>9,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000009B',
                  'nombre' => 'Iñaki',
                  'apellidos' => 'Williams',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>10,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000010B',
                  'nombre' => 'Markel',
                  'apellidos' => 'Susaeta',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>11,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000011B',
                  'nombre' => 'Íñigo',
                  'apellidos' => 'Lekue',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>12,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000012B',
                  'nombre' => 'Xabier',
                  'apellidos' => 'Etxeita',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>13,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000013B',
                  'nombre' => 'Mikel',
                  'apellidos' => 'Rico',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>14,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000015B',
                  'nombre' => 'Aritz',
                  'apellidos' => 'Aduriz',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000016B',
                  'nombre' => 'Raúl',
                  'apellidos' => 'García',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>16,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000017B',
                  'nombre' => 'Mikel',
                  'apellidos' => 'Balenziaga',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => '1980/01/01',
                  'dorsal' =>17,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '00000018B',
                  'nombre' => 'Enric',
                  'apellidos' => 'Saborit',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>19,
                  'equipo' => $equipo->id
            ]);

        //JUGADORES DEL GRANADA



            $equipo = DB::table('equipo')->where('nombreEquipo','like','%Granada%')->first();
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000020B',
                  'nombre' => 'Raul',
                  'apellidos' => 'Silva',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>1,
                  'equipo' => $equipo->id

            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000021B',
                  'nombre' => 'Gastón',
                  'apellidos' => 'Silva',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>2,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000022B',
                  'nombre' => 'Sergi',
                  'apellidos' => 'Samper',
                  'fNac' =>  date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>3,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000023B',
                  'nombre' => 'Uche',
                  'apellidos' => 'Agbo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>4,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000024B',
                  'nombre' => 'David',
                  'apellidos' => 'Lombán',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 1,
                  'dorsal' =>5,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000025B',
                  'nombre' => 'Adrián',
                  'apellidos' => 'Ramos',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>6,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000026B',
                  'nombre' => 'Wakaso',
                  'apellidos' => 'Mubarak',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000027B',
                  'nombre' => 'Ezequiel',
                  'apellidos' => 'Ponce',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>8,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000028B',
                  'nombre' => 'Jeremie',
                  'apellidos' => 'Boga',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>9,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000029B',
                  'nombre' => 'Panagiotis',
                  'apellidos' => 'Kone',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>10,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000030B',
                  'nombre' => 'Guillermo',
                  'apellidos' => 'Ochoa',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>11,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000031B',
                  'nombre' => 'Franck',
                  'apellidos' => 'Tabanou',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>12,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000032B',
                  'nombre' => 'Omer',
                  'apellidos' => 'Atzili',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>13,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
             DB::table('jugador')->insert([
                  'dni'=> '000000033B',
                  'nombre' => 'Rúben',
                  'apellidos' => 'Vezo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>23,
                  'equipo' => $equipo->id
            ]);


            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000034B',
                  'nombre' => 'Andreas',
                  'apellidos' => 'Pereira',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>14,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000035B',
                  'nombre' => 'Isaac',
                  'apellidos' => 'Cuenca',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000036B',
                  'nombre' => 'Matthieu',
                  'apellidos' => 'Saunier',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>16,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000037B',
                  'nombre' => 'Rene',
                  'apellidos' => 'Krhin',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>17,
                  'equipo' => $equipo->id
            ]);

            //jugadores del betis

             $equipo = DB::table('equipo')->where('nombreEquipo','like','%Betis%')->first();
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000020C',
                  'nombre' => 'Dani',
                  'apellidos' => 'Giménez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>1,
                  'equipo' => $equipo->id

            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000021C',
                  'nombre' => 'Rafa',
                  'apellidos' => 'Navarro',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Portero',
                  'cargo' => 0,
                  'dorsal' =>2,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000022C',
                  'nombre' => 'Álex',
                  'apellidos' => 'Martínez',
                  'fNac' =>  date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>3,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000023C',
                  'nombre' => 'Felipe',
                  'apellidos' => 'Gutiérrez',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>4,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000024C',
                  'nombre' => 'Rubén',
                  'apellidos' => 'Pardo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 1,
                  'dorsal' =>5,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000025C',
                  'nombre' => 'Jonas',
                  'apellidos' => 'Martin',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>6,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000026C',
                  'nombre' => 'Antonio',
                  'apellidos' => 'Sanabria',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 0,
                  'dorsal' =>7,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000027C',
                  'nombre' => 'Dani',
                  'apellidos' => 'Ceballos',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Defensa',
                  'cargo' => 3,
                  'dorsal' =>8,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000028C',
                  'nombre' => 'Nahuel',
                  'apellidos' => 'Leiva',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>9,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000029C',
                  'nombre' => 'Cristiano',
                  'apellidos' => 'Piccini',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>10,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000030C',
                  'nombre' => 'Antonio',
                  'apellidos' => 'Adán',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>11,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000031C',
                  'nombre' => 'Riza',
                  'apellidos' => 'Durmisi',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>12,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000032C',
                  'nombre' => 'Ryan',
                  'apellidos' => 'Donk',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>13,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
             DB::table('jugador')->insert([
                  'dni'=> '000000033C',
                  'nombre' => 'Álvaro',
                  'apellidos' => 'Cejudo',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Medio',
                  'cargo' => 0,
                  'dorsal' =>23,
                  'equipo' => $equipo->id
            ]);


            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000034C',
                  'nombre' => 'Roman',
                  'apellidos' => 'Zozulya',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>14,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000035C',
                  'nombre' => 'Álex',
                  'apellidos' => 'Alegría',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>15,
                  'equipo' => $equipo->id
            ]);
            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000036C',
                  'nombre' => 'Germán',
                  'apellidos' => 'Pezzella',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>16,
                  'equipo' => $equipo->id
            ]);

            $fecha = mt_rand($fMin, $fMax);
            DB::table('jugador')->insert([
                  'dni'=> '000000037C',
                  'nombre' => 'Alin',
                  'apellidos' => 'Toşca',
                  'fNac' => date($formato,$fecha),
                  'posicion' => 'Delantero',
                  'cargo' => 0,
                  'dorsal' =>17,
                  'equipo' => $equipo->id
            ]);

            

    }
}
