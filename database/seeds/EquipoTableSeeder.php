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
    }
}
