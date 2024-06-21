<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CheckoutDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++) {
            DB::table('checkout_details')->insert(
                [
                    'checkout_detail_id' => $i,
                    'delivery_date' => $faker->dateTime()->format('Y-m-d H:i:s'),
                    'delivery_time' => $faker->time(),
                    'destination_city' => $faker->city(),
                    'receiver_name' => $faker->name(),
                    'receiver_phone_number' => $faker->numberBetween(100, 999),
                    'address' => $faker->address(),
                    'postal_code' => $faker->numberBetween(10000, 99999),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            );
        }
    }
}
