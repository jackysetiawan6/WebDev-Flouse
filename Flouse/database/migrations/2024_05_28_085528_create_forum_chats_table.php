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
            $table->id('forum_id');
            $table->unsignedBigInteger('user_id');
            $table->string('chat_text');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->id('like_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('forum_id');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onCascade('cascade');
            $table->foreign('forum_id')->on('forum_chats')->references('forum_id')->onDelete('cascade')->onDelete('cascade');
        });
        
        Schema::create('tags', function (Blueprint $table) {
            $table->id('tag_id');
            $table->unsignedBigInteger('forum_id');
            $table->string('tag_name');

            $table->foreign('forum_id')->on('forum_chats')->references('forum_id')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('chat_replies', function (Blueprint $table) {
            $table->id('reply_id');
            $table->unsignedBigInteger('forum_id');
            $table->unsignedBigInteger('user_id');
            $table->string('reply_text');
            $table->timestamps();

            $table->foreign('forum_id')->on('forum_chats')->references('forum_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->on('users')->references('user_id')->onDelete('cascade')->onUpdate('cascade');
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
