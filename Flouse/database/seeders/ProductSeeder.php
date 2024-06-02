<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'original_price' => 100,
            'discount' => 10,
            'final_price' => 90,
            'description' => 'Product 1 description',
        ]);
    }
}