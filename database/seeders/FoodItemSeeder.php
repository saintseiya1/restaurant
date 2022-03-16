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
    }
}
