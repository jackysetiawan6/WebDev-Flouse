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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->default('Other');
            $table->string('phone_number')->unique();
            $table->string('profile_image')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_subscribed')->default(false);
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id("address_id");
            $table->unsignedBigInteger("user_id");
            $table->boolean('is_main');
            $table->string('email')->unique();
            $table->string('address_label');
            $table->string('address_full');
            $table->string('address_notes');
            $table->string('address_phone');

            $table->foreign('user_id')->on('users')->references('user_id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
