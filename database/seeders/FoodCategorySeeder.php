<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'Lorem ipsum dolor sit amet',
            'image_url' => '/img/chips.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet',
            'image_url' => '/img/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet',
            'image_url' => '/img/chips.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Lorem ipsum dolor sit amet',
            'image_url' => '/img/salad.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => 'Lorem ipsum dolor sit amet',
            'image_url' => '/img/cupcake.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
