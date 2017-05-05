<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    //
    public function grade()
    {
        return $this->hasOne('App\Grade');
    }
}
