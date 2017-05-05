<?php 

namespace App\helper;

class auth{

    public static function check(){
        $isloggedin = session('isloggedin');
        if(isset($isloggedin)&&$isloggedin==1){
          return true;
        }
        else{
            return ['error'=>'you are not logged in'];
        }
    }

     
    public static function logout(){
       if(session()->get('isloggedin')==1){
           session()->put('isloggedin','0');
           return true;
       }
       else{
           return ['error'=>'you are not logged in'];
       }
    }
}