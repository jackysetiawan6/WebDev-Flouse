<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('original_price');
            $table->integer('discount')->default(0);
            $table->integer('final_price');
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->references('id')->on('products');
            $table->string('image_url');
        });

        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->references('id')->on('products');
            $table->foreignId('color_id')->constrained('colors')->references('id')->on('colors');
        });

        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->references('id')->on('products');
            $table->foreignId('category_id')->constrained('categories')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
