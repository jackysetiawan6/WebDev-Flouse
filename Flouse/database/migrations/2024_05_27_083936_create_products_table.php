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
            $table->id('product_id');
            $table->string('name');
            $table->float('original_price');
            $table->integer('discount')->default(0);
            $table->integer('final_price');
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id('product_image_id');
            $table->unsignedBigInteger('product_id');
            $table->string('image_url');

            $table->foreign('product_id')->on('products')->references('product_id')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('product_colors', function (Blueprint $table) {
            $table->id('product_color_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');

            $table->foreign('product_id')->on('products')->references('product_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color_id')->on('colors')->references('color_id')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('product_category', function (Blueprint $table) {
            $table->id('product_category_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('product_id')->on('products')->references('product_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->on('categories')->references('category_id')->onDelete('cascade')->onUpdate('cascade');
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
