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
            $table->id('room_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cust_service_id');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cust_service_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('chat_texts', function (Blueprint $table) {
            $table->id('chat_id');
            $table->unsignedBigInteger('room_id');
            $table->string('chat_text');
            $table->timestamps();

            $table->foreign('room_id')->on('customer_chats')->references('room_id')->onDelete('cascade')->onUpdate('cascade');
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
