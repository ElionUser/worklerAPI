<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Personal extends Model
{

    public function user() 
    {
        return $this->hasOne(User::class);
    }
}
