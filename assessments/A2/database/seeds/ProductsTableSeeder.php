<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Lamb Burger',
            'price' => '19',
            'restaurant_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'name' => 'Grilled Chicken Burger',
            'price' => '17',
            'restaurant_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'name' => 'Pulled Pork Burger',
            'price' => '21',
            'restaurant_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'name' => 'Southern Chicken Burger',
            'price' => '20',
            'restaurant_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'name' => 'Pizza',
            'price' => '12',
            'restaurant_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pasta',
            'price' => '16',
            'restaurant_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
