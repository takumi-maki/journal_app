<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('post_type')->change();
            $table->text('post_title')->change();
            $table->text('post_first_greeting')->change();
            $table->text('post_last_greeting')->change();
            $table->text('post_introduction')->change();
            $table->text('post_one')->change();
            $table->text('post_two')->nullable()->change();
            $table->text('post_three')->nullable()->change();
            $table->text('post_summary')->change();
            $table->text('post_information')->nullable()->change();
            $table->text('post_character')->nullable()->change();
            $table->text('post_story')->nullable()->change();
            $table->text('post_spoiler')->nullable()->change();
            $table->text('post_comment')->nullable()->change();
            $table->text('post_image_path')->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('post_type')->change();
            $table->string('post_title')->change();
            $table->string('post_first_greeting')->change();
            $table->string('post_last_greeting')->change();
            $table->string('post_introduction')->change();
            $table->string('post_one')->change();
            $table->string('post_two')->nullable()->change();
            $table->string('post_three')->nullable()->change();
            $table->string('post_summary')->change();
            $table->string('post_information')->nullable()->change();
            $table->string('post_character')->nullable()->change();
            $table->string('post_story')->nullable()->change();
            $table->string('post_spoiler')->nullable()->change();
            $table->string('post_comment')->nullable()->change();
            $table->string('post_image_path')->nullable()->change();
        });
    }
}
