<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'updated_at' => Carbon::create('2019','09','10')
        ]);
        DB::table('orders')->insert([
            'user_name' => "Ted",
            'product_name' => 'Crispy Bacon and Cheese Burger',
            'price' => '13',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','09','10')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Caesers Palace Burger',
            'price' => '13',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','10','20')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Chips',
            'price' => '4',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','09','09')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Simply Grilld',
            'price' => '10.50',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','09','13')
        ]);
        DB::table('orders')->insert([
            'user_name' => "Ted",
            'product_name' => 'Caesers Palace Burger',
            'price' => '13',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','09','15')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Caesers Palace Burger',
            'price' => '13',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 1,
            'updated_at' => Carbon::create('2019','10','02')
        ]);
        DB::table('orders')->insert([
            'user_name' => "Ted",
            'product_name' => 'Sticky Date Pudding',
            'price' => '13',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 2,
            'updated_at' => Carbon::create('2019','10','12')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'BBQ Cheeseburger',
            'price' => '17',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 4,
            'updated_at' => Carbon::create('2019','10','03')
        ]);
        DB::table('orders')->insert([
            'user_name' => "Ted",
            'product_name' => 'BBQ Cheeseburger',
            'price' => '17',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 4,
            'updated_at' => Carbon::create('2019','10','18')
        ]);
        DB::table('orders')->insert([
            'user_name' => "Ted",
            'product_name' => 'Nutella Bomba',
            'price' => '23',
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'manufacturer_id' => 5,
            'updated_at' => Carbon::create('2019','10','23')
        ]);
        DB::table('orders')->insert([
            'user_name' => "John",
            'product_name' => 'Pork Belly',
            'price' => '39',
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'manufacturer_id' => 3,
            'updated_at' => Carbon::create('2019','10','27')
        ]);
    }
}
