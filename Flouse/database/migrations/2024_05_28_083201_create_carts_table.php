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
        Schema::create('checkout_details', function (Blueprint $table) {
            $table->id('checkout_detail_id');
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->string('destination_city');
            $table->string('receiver_name');
            $table->string('receiver_phone_number');
            $table->string('address');
            $table->string('postal_code');
            $table->timestamps();
        });
        
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cart_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('checkout_detail_id');
            $table->integer('quantity');
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->on('products')->references('product_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('checkout_detail_id')->on('checkout_details')->references('checkout_detail_id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
