<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => 'GrillD',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('restaurants')->insert([
            'name' => 'Gemelli Italian',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restaurants')->insert([
            'name' => 'The Loose Moose',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
