<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class medicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++){
            DB::table('medicines')->insert([
                'name' => $faker->word(2, true),
                'brand' => $faker->word(2, true),
                'dosage' => $faker->numerify('##mg tablets'),
                'form' => $faker->randomElement(['viên nén','viên nang','xi-rô','thuốc ngậm']),
                'price' =>$faker->randomFloat(2, 1, 1000),
                'stock' =>$faker->numberBetween(1, 100),
            ]);
        }
    }
}
