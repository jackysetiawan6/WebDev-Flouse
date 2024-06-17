<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            DB::table('products')->insert(
                [
                    'product_id' => $i,
                    'name' => $faker->text(20),
                    'original_price' => $faker->numberBetween(200000, 1000000),
                    'discount' => $faker->numberBetween(10, 50),
                    'final_price' => $faker->numberBetween(100000, 500000),
                    'description' => $faker->text(50),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
        );
        }
    }
}