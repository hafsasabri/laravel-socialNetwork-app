<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function likes()
    {
        return $this->hasMany('Like');
    }
}
