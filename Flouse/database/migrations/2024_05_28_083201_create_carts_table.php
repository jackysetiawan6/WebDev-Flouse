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
            $table->id();
            $table->date('delivery_date');
            $table->string('delivery_time');
            $table->string('destination_city');
            $table->float('receiver_name');
            $table->string('receiver_phone_number');
            $table->string('address');
            $table->string('postal_code');
            $table->timestamps();
        });
        
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->references('id')->on('products');
            $table->foreignId('checkout_detail_id')->constrained('checkout_details')->references('id')->on('checkout_details');
            $table->integer('quantity');
            $table->string('notes')->nullable();
            $table->timestamps();
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
