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
            $table->id('review_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->float('overall_rating');
            $table->float('appearance');
            $table->float('fragrance');
            $table->float('longevity');
            $table->float('value');
            $table->string('review_text')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->on('products')->references('product_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
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
