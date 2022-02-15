<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $i = 0;
        while ($i < 100) {
            DB::table("tweets")->insert([
                'content' => $faker->sentence,
                'image_name' => 'car.jpg',
                'user_id' => rand(1, 10),
            ]);
            $i++;
        }
    }
}
