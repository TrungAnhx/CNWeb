<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class computersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 50; $i++){
            DB::table('computers')->insert([
                'computer_name' => $faker->unique()->numerify('Lab$-PC##'),
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'Macbook Pro', 'Macbook Air']),
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Windows 10 Home', 'Windows 10 Enterprise', 'Windows 11 Pro', 'Windows 11 Home', 'Windows 11 Enterprise']),
                'processor' => $faker->randomElement(['Intel Core i5-11400', 'Intel Core i3-11200', 'Intel Core i7-11900', 'Intel Core i3-12400', 'Intel Core i5-12700', 'Intel Core i7-12900']),
                'memory' => $faker->numerify('##GB'),
                'available' => $faker->boolean()

            ]);
        }
    }
}
