<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class changeLog extends Model
{
    //
    public function course()
    {
        return $this->hasOne('App\Course');
    }
}
