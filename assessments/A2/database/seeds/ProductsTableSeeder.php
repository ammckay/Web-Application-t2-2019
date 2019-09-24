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
            'name' => 'Grilled Chicken Burger',
            'price' => '13',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Southern Chicken Burger',
            'price' => '14',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pizza',
            'price' => '15',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pasta',
            'price' => '10',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Steak',
            'price' => '21',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pulled Pork',
            'price' => '19',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
