<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Billys Burger is an American burger chain',
            'keywords' => 'Burgers, Local Burger, Billys Burgers, Salads, Best Burgers in Town',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
