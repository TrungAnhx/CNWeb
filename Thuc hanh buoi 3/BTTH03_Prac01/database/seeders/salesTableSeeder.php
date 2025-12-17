<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class salesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 50; $i++){
            DB::table('sales')->insert([
                'medicine_id' => $faker->unique()->numberBetween(1, 50),
                'quantity' => $faker->numberBetween(1, 100),
                'sale_date' => $faker->dateTime(),
                'customer_phone' => $faker->numerify('09#######'),
            ]);
        }
    }
}
