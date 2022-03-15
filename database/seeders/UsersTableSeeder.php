<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'fname' => 'Billy',
            'lname' => 'Smith',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'Amy',
            'lname' => 'Johnson',
            'email' => 'amy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
