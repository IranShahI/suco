<?php

namespace App\Http\Controllers;

use App\professor;
use Illuminate\Http\Request;
use App\Helper\auth;
use App\Helper\ProfessorAuth;

class ProfessorController extends Controller
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
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    
     

    // auth::logout();
    // dd(session()->get('isloggedin'));session()->get('isloggedin')
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(professor $professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, professor $professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(professor $professor)
    {
        //
    }
}
