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
            'product_id' => 12,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
