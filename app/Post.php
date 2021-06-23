<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Company;

class Post extends Model
{
    protected $fillable = ['name_post','description','img_post','postable_id','postable_type'];
    

    public function postable() {

        return $this->morphTo();
    }
}
