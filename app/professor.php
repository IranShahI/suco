<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class professor extends Authenticatable
{
    //
    //Mass assignable attributes
     protected $fillable = [
      'first_name','last_name','personal_code', 'email', 'password','allowed'
    ];

    //hidden attributes
    protected $hidden = [
       'password', 'remember_token',
    ];

    
     public function username(){
         return 'personal_code';
     }

    public function courses()
    {
        return $this->hasMany('Course');
    }

}
