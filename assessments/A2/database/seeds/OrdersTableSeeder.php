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
            'user_name' => "Ted",
            'product_name' => 'Crispy Bacon and Cheese Burger',
            'price' => '13',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Caesers Palace Burger',
            'price' => '13',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
