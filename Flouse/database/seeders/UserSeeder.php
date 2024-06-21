<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert(
                [
                    'user_id' => $i,
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'password' => $faker->password(),
                    'date_of_birth' => $faker->dateTime()->format('Y-m-d H:i:s'),
                    'gender' => $faker->randomElement(['male', 'female']),
                    'phone_number' => $faker->numerify('####-####-####'),
                    'profile_image' => $faker->text(20),
                    'is_admin' => $faker->randomElement([TRUE, FALSE]),
                    'is_subscribed' => $faker->randomElement([TRUE, FALSE]),
                ]
            );
        }
    }
}
