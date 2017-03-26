<?php

use Illuminate\Database\Seeder;

class ParticiparTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partidos = DB::table('partido')->get();
        $contador1 = 0;
        foreach ($partidos as $partido) {

            //Introduzco un portero de equipo local
            $jugador= DB::table('jugador')->whereColumn([
                                                        ['equipo', '=', $partido->equipoLocal],
                                                        ['posicion', '=', 'Portero']])->get();


            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 4){
                
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                }else break;
                $contador1++;
            }
        
            DB::table('participar')->insert([
                    'jugador'=> $jugador->id,
                    'equipoLocal' => $partido->equipoLocal,
                    'equipoVisitante' => $partido->equipoVisitante,
                    'tipo' => 1
            ]);
                    
            
            //Introduzco un portero de equipo visitante
            $jugador= DB::table('jugador')->whereColumn([
                                                        ['equipo', '=',  $partido->equipoVisitante],
                                                        ['posicion', '=', 'Portero']])->get();
        
            DB::table('participar')->insert([
                    'jugador'=> $jugador->id,
                    'equipoLocal' => $partido->equipoLocal,
                    'equipoVisitante' => $partido->equipoVisitante,
                    'tipo' => 1
            ]);

            //introduzco los defensas de equipo local
           $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=', $partido->equipoLocal],
                                                    ['posicion', '=', 'Defensa']])->get();
            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 4){
                
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                }else break;
                $contador1++;
            }

            $contador1= 0;
            //introduzco los defensas de equipo visitante
            $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=', $partido->equipoVisitante],
                                                    ['posicion', '=', 'Defensa']])->get();

            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 4){
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                }else break;
                $contador1++;
            }
            
            $contador1= 0;
            //introduzco medios de equipo local
            $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=', $partido->equipoLocal],
                                                    ['posicion', '=', 'Medio']])->get();

            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 4){
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                }else break;
                $contador1++;
            }
            $contador1= 0;
            

            //introduzco medios de equipo visitante
            $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=', $partido->equipoVisitante],
                                                    ['posicion', '=', 'Medio']])->get();
            
            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 4){
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                }else break;
                $contador1++;
            }
            $contador1= 0;

            //introducir delanteros de equipo local
            $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=',$partido->equipoLocal],
                                                    ['posicion', '=', 'Delantero']])->get();

                
            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 2){
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                    $contador1++;
                }else break;
                
            }
            $contador1= 0;

            //introducir delanteros de equipo visitante
            $jugadores = DB::table('jugador')->whereColumn([
                                                    ['equipo', '=', $partido->equipoVisitante],
                                                    ['posicion', '=', 'Delantero']])->get();
            
            foreach ( $jugadores as $jugador) {
                if($contador1 >= 0 and $contador1 < 2){
                    DB::table('participar')->insert([
                            'jugador'=> $jugador->id,
                            'equipoLocal' => $partido->equipoLocal,
                            'equipoVisitante' => $partido->equipoVisitante,
                            'tipo' => 1
                    ]);
                    $contador1++;
                }else break;
            }    
            
        }
        
    }
}
