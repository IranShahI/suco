<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/register','ProfessorController@create');
Route::post('/register','ProfessorController@store');
// Route::get('/register','StudentController@create');
// Route::post('/register','StudentController@store');
// Route::get('/register','OperatorController@create');
// Route::post('/register','OperatorController@store');