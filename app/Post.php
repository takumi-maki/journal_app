<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_type',
        'post_title',
        'post_first_greeting',
        'post_type',
        'post_introduction',
        'post_information',
        'post_character',
        'post_story',
        'post_spoiler',
        'post_one',
        'post_two',
        'post_three',
        'post_summary',
        'post_last_greeting',
        'post_comment',
        'post_image_path',
        'post_key'
        ];
    public function user()
    {
        return $this->belongsTo('App\User');        
    }

}
