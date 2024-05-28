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
        Schema::create('customer_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
            $table->foreignId('cust_service_id')->constrained('users')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('chat_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('customer_chats')->references('id')->on('customer_chats');
            $table->string('chat_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_chats');
    }
};
