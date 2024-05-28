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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->references('id')->on('products');
            $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
            $table->float('overall_rating');
            $table->float('appearance');
            $table->float('fragrance');
            $table->float('longevity');
            $table->float('value');
            $table->string('review_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
