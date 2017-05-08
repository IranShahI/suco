<?php

namespace App\Http\Controllers;

use App\student;
use Auth;
use Illuminate\Http\Request;
use App\field;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fields = field::all();
        return view('auth.register')->with('fields',$fields);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $student = $this->create_student($request->all());
      $this->guard()->login($student);
       return redirect('/');

    // auth::logout();
    // dd(session()->get('isloggedin'));session()->get('isloggedin')
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }

    protected function create_student(array $data)
    {
        return Student::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'student_number' => $data['student_number'],
            'mobile' => $data['mobile'],
            'password' => bcrypt($data['password']),
            'field_id' => $data['field_id'],
        ]);
    }


       //Get the guard to authenticate Student
   protected function guard()
   {
       return Auth::guard('web_student');
   }

}
