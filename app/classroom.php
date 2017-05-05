<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    //
    public function facility()
    {
        return $this->hasOne('App\Facility');
    }
}
