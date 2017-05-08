<?php

namespace App\Http\Controllers\StudentAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    //Custom guard for student
    protected function guard()
    {
      return Auth::guard('web_student');
    }   
    //Shows student login form
   public function showLoginForm()
   {
       return view('auth.login');
   }

}
