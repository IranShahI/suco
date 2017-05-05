<?php 

namespace App\Helper;
use \App\professor as Proff;
use Illuminate\Http\Request;


class ProfessorAuth {
    // register a professor with email
    public static function registerByPersonalCode($request){
        //create a professor object
        
        $professor= new Proff;
        $professor->personal_code=$request['personal_code'];
        $professor->first_name=$request['first_name'];
        $professor->last_name=$request['first_name'];
        $professor->email=$request['email'];
        $professor->mobile=$request['mobile'];
        $professor->password = bcrypt($request['password']);
        $professor->allowed=1;
        //save object to database
       
        $professor->save();
        
        $data_login = ['personal_code'=>$professor->personal_code,'password'=>$professor->password];

        return ProfessorAuth::loginProfessor($data_login);
    }

    public static function loginProfessor($data){
       $proff = Proff::where(['personal_code'=>$data['personal_code'],'password'=>$data['password']])->first();
       if(!is_null($proff)){
           session()->put('isloggedin', '1');
           return true;
       }
    }
}