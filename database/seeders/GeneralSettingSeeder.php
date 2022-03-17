<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Billys Burger',
            'logo_image_url' => '/img/salad.png',
            'address_1' => '234 Main st',
            'address_2' => '',
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '11385',
            'phone_number' => '347-231-4545',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}