<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Restaurant user
            'isRestaurant' => 1,
            'manufacturer_id' => 1,
            'name' => "Bob",
            'address' => "34 Parkwood Boulevard, Parkwood QLD",
            'email' => 'Bob@gmail.com', 
            'password' => bcrypt('123456'),
        ]); 
        DB::table('users')->insert([
            // Restaurant user
            'isRestaurant' => 1,
            'manufacturer_id' => 2,
            'name' => "Fred",
            'address' => "12 Evergreen Court, Parkwood QLD",
            'email' => 'Fred@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            // Consumer user
            'isRestaurant' => 0,
            'manufacturer_id' => 0,
            'name' => "Ted",
            'address' => "127 Tee Trees Boulevard, Arundel QLD",
            'email' => 'Ted@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            // Consumer user
            'isRestaurant' => 0,
            'manufacturer_id' => 0,
            'name' => "John",
            'address' => "24 Ocean Street, Runaway Bay QLD",
            'email' => 'John@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
    }
}
