<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name'];

    public function location() {
        $this->belongsTo(User::class());
    }

    public function users() {
        $this->hasMany(User::class());
    }

}
