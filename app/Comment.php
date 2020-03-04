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
            'content'       => NULL,
            'post_id'       => NULL,
            'author'        => NULL,
            'email'         => NULL
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
