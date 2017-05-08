<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class student extends Authenticatable
{
    //
    //Mass assignable attributes
     protected $fillable = [
      'first_name','last_name','student_number', 'email', 'mobile', 'password','field_id',
    ];

    //hidden attributes
    protected $hidden = [
       'password', 'remember_token',
    ];

    
     public function username(){
         return 'student_number';
     }

    public function field()
    {
        return $this->hasOne('Field');
    }
    public function courses()
    {
        return $this->belongsToMany('Course');
    }

}
