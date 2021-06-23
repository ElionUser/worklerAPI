<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;
use App\Company;

class Experience extends Model
{
    public function formation() 
    {
        return $this->belongsTo(Formation::class);
    }

    public function company() 
    {
        return $this->belongsTo(Company::class);
    }

    
}
