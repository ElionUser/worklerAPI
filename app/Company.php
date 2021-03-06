<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function posts() {

        return $this->morphMany(Post::class,'postable');
    }
}
