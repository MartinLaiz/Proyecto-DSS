<?php

use Illuminate\Database\Seeder;

class CompeticionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('competicion')->insert([
            'nombre' => 'Liga'
         ]);


         DB::table('competicion')->insert([
            'nombre' => 'Copa'
         ]);
    }
}
