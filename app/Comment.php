<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{

    protected $fillable = [
        'user_id',
        'post_id',
        'content',
        'author',
        'email'
    ];


    protected $attributes = [
            'content'       => 0,
            'post_id'       => 0,
            'author'        => 0,
            'email'         => 0
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
