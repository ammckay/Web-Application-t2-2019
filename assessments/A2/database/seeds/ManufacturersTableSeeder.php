<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => 'Grilld',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('manufacturers')->insert([
            'name' => 'Marios',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('manufacturers')->insert([
            'name' => 'Moo Moo',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('manufacturers')->insert([
            'name' => 'Pizza Hut',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('manufacturers')->insert([
            'name' => 'Gemelli',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
    }
}
