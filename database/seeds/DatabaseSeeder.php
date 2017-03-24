<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(EstadioTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(JugadorTableSeeder::class);
        $this->call(EntrenadorTableSeeder::class);
        $this->call(PartidoTableSeeder::class);
                    
    }
}
