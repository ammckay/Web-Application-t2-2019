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
            'name' => "Bob",
            'email' => 'Bob@gmail.com', 
            'password' => bcrypt('123456'),
        ]); 
        DB::table('users')->insert([
            // Restaurant user
            'isRestaurant' => 1,
            'name' => "Fred",
            'email' => 'Fred@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            // Consumer user
            'isRestaurant' => 0,
            'name' => "Ted",
            'email' => 'Ted@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            // Consumer user
            'isRestaurant' => 0,
            'name' => "John",
            'email' => 'John@gmail.com', 
            'password' => bcrypt('123456'),
        ]);
    }
}
