<?php

namespace App;

use App\Country;
use App\Post;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'moto', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attribute which has a default value
     */
    protected $attributes = [
        'motto'     => 0,
        'location'  => 0
    ];

    public function location() {
        return $this->hasMany(Location::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }


}
