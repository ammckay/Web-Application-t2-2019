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
            'name' => 'Simply Grilld',
            'price' => '10.50',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Crispy Bacon and Cheese Burger',
            'price' => '13',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Caesers Palace Burger',
            'price' => '13',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Baa Baa Burger',
            'price' => '14',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Sir Truffle Burger',
            'price' => '16',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Beyond Garden Goodness',
            'price' => '16',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Chips',
            'price' => '4',
            'manufacturer_id' => 1,
            'image' => 'products_images/grilld.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Foccacia Garlic',
            'price' => '11',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Fettuccini Princess',
            'price' => '31',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Spaghetti Meatballs',
            'price' => '26',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Margherita',
            'price' => '15',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Caesar Salad',
            'price' => '18.90',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Lasagna and Chips',
            'price' => '15.90',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Sticky Date Pudding',
            'price' => '13',
            'manufacturer_id' => 2,
            'image' => 'products_images/marios.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Bang Bang Duck',
            'price' => '24',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Beef Burger',
            'price' => '22',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pork Belly',
            'price' => '39',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Beef Rump',
            'price' => '39',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Skin on Fries',
            'price' => '9',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Almond and Orange Cake',
            'price' => '16',
            'manufacturer_id' => 3,
            'image' => 'products_images/moomoo.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Garlic Bread',
            'price' => '4.45',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Hawaiian',
            'price' => '14',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Butchers Block',
            'price' => '17',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'BBQ Cheeseburger',
            'price' => '17',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Honey Soy Wings',
            'price' => '9',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Smoky BBQ',
            'price' => '9',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Hersheys Cookie',
            'price' => '8',
            'manufacturer_id' => 4,
            'image' => 'products_images/pizzahut.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Garlic Focaccia',
            'price' => '19',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Arancini Al Funghi',
            'price' => '22',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Calamari Alla Griglia',
            'price' => '29',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Roma',
            'price' => '28',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Spaghetti Alla Carbonara',
            'price' => '37',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Nutella Bomba',
            'price' => '23',
            'manufacturer_id' => 5,
            'image' => 'products_images/gemelli.png',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
