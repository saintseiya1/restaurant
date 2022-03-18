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
            'address_1' => '730 NW 36th St',
            'address_2' => '',
            'city' => 'Miami',
            'state' => 'FL',
            'zipcode' => '33127',
            'phone_number' => '347-231-4545',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}