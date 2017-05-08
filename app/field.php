<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class field extends Model
{
    //
    public function grade()
    {
        return $this->hasOne('App\Grade');
    }
    public function students(){
        return $this->hasMany('app\Student');
    }
}
