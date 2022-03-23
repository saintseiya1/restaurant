<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('members')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/Los_Angeles'),
                'created_at' => $faker->dateTimeThisMonth('now', 'America/Los_Angeles')
            ]);
        }
    }
}
