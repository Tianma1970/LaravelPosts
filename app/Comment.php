<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'content',
        'post'];


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
