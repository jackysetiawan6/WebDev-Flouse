<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++) {
            DB::table('carts')->insert(
                [
                    'cart_id' => $i,
                    'user_id' => $faker->numberBetween(1, 5),
                    'product_id' => $faker->unique()->numberBetween(1, 10),
                    'checkout_detail_id' => $i,
                    'quantity' => $faker->numberBetween(10, 20),
                    'notes' => $faker->text(16),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            );
        }
    }
}
