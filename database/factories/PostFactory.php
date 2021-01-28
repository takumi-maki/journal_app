<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
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
            'post_key' => 'lock',
            'user_id' => 1
    ];
});
