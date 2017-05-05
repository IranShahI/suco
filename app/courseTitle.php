<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseTitle extends Model
{
    //
    public function fileds()
    {
        return $this->belongsToMany('App\Field');
    } 
}
