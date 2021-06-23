<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;

class Language extends Model
{
    public function formations() 
    {
        return $this->belongsToMany(Formation::class);
    }
}
