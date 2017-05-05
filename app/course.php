<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function courseTitle()
    {
        return $this->hasOne('App\CourseTitle');
    }
    public function professor()
    {
        return $this->hasOne('App\Professor');
    }
    public function semester()
    {
        return $this->hasOne('App\Semester');
    }
    public function classroom()
    {
        return $this->hasOne('App\Classroom');
    }
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
    public function changeLogs()
    {
        return $this->hasMany('App\ChangeLog');
    }
    public function notifications()
    {
        return $this->hasMany('App\Notification');
    } 
    
}
