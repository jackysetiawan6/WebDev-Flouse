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
        Schema::create('forum_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
            $table->string('chat_text');
            $table->timestamps();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
            $table->foreignId('forum_id')->constrained('forum_chats')->references('id')->on('forum_chats');
            $table->timestamps();
        });
        
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_id')->constrained('forum_chats')->references('id')->on('forum_chats');
            $table->string('tag_name');
        });

        Schema::create('chat_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_id')->constrained('forum_chats')->references('id')->on('forum_chats');
            $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
            $table->string('reply_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_chats');
    }
};
