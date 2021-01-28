<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++){
            DB::table('posts')->insert([
            'post_type' => 'movie',
            'post_title' => str_random(10),
            'post_first_greeting' => str_random(50),
            'post_last_greeting' => str_random(50),
            'post_introduction' => str_random(50),
            'post_one' => str_random(100),
            'post_two' => str_random(100),
            'post_three' => str_random(100),
            'post_summary' => str_random(50),
            'post_information' => str_random(50),
            'post_character' => str_random(50),
            'post_story' => str_random(100),
            'post_spoiler' => str_random(50),
            'post_comment' => str_random(50),
            'post_key' => 'open',
            'user_id' => 1,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
            DB::table('posts')->insert([
            'post_type' => 'book',
            'post_title' => 'book_type_open',
            'post_first_greeting' => str_random(100),
            'post_last_greeting' => str_random(50),
            'post_introduction' => str_random(200),
            'post_one' => str_random(100),
            'post_two' => str_random(100),
            'post_three' => str_random(100),
            'post_summary' => str_random(50),
            'post_information' => str_random(50),
            'post_character' => str_random(50),
            'post_story' => str_random(100),
            'post_spoiler' => str_random(50),
            'post_comment' => str_random(50),
            'post_key' => 'open',
            'user_id' => 1,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
            ]);
        }
    }
}