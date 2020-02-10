<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable
     */
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public function user() {
        return $this->belongsTo(User::class);

    }
}
