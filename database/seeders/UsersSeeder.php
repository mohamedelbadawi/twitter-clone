<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $i=0;
        while ($i<10){
        DB::table("users")->insert([
            "name" => $faker->name(),
            "email" => $faker->unique()->freeEmail,
            "user_name"=>$faker->unique()->userName(),
            "image_name"=>'profile.png',
            "password"=>bcrypt("123456789"),

        ]);
        $i++;
        }
    }
}
