<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anchor extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
