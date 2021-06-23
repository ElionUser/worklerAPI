<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function languages() 
    {
        return $this->belongsToMany(Language::class);
    }

    public function experiences() 
    {
        return $this->hasMany(Experience::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

}
