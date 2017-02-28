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
        $this->call(EquipoTableSeeder::class);
        $this->call(JugadorTableSeeder::class);
        $this->call(EntrenadorTableSeeder::class);
    }
}
