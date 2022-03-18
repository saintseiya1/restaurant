<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Lettuce, tomato, onions, beef, cheese, wheat bun, ketchup',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Lettuce, tomato, onions, beef, cheese, wheat bun, ketchup',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Lettuce, tomato, onions, beef, cheese, wheat bun, ketchup',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Finger lickin good chicken',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Baby Back Ribs',
            'description' => 'Plate of ribs',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Cesar Salad',
            'description' => 'Lettuce, tomato, and cheese',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Cupcakes',
            'description' => 'Delicious cupcakes',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Coca Cola',
            'description' => 'Delicious cupcakes',
            'image_url' => '/img/cupcake.png',
            'price' => 9.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
