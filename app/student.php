<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public function field()
    {
        return $this->hasOne('Field');
    }
    public function courses()
    {
        return $this->belongsToMany('Course');
    }

}
