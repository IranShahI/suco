<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    //
    public function courses()
    {
        return $this->hasMany('Course');
    }

}
