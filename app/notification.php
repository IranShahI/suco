<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    //
    public function grade()
    {
        return $this->hasOne('App\Grade');
    }
}
