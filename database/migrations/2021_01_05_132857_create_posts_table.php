<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_type');
            $table->string('post_title');
            $table->string('post_first_greeting');
            $table->string('post_last_greeting');
            $table->string('post_introduction');
            $table->string('post_one');
            $table->string('post_two')->nullable();
            $table->string('post_three')->nullable();
            $table->string('post_summary');
            $table->string('post_information');
            $table->string('post_character')->nullable();
            $table->string('post_story')->nullable();
            $table->string('post_spoiler')->nullable();
            $table->string('post_comment')->nullable();
            $table->string('post_image_path')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
