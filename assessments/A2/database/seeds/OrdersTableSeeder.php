<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_name' => 'Bob',
            'product_name' => 'Grilled Chicken Burger',
            'quantity' => 10,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_name' => 'Bob',
            'product_name' => 'Southern Chicken Burger',
            'quantity' => 2,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_name' => 'Ted',
            'product_name' => 'Pulled Pork',
            'quantity' => 8,
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_name' => 'Fred',
            'product_name' => 'Pasta',
            'quantity' => 3,
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_name' => 'John',
            'product_name' => 'Pulled Pork',
            'quantity' => 1,
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
