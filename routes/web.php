<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/register','ProfessorController@create');
Route::post('/register/professor','ProfessorController@store');

Route::get('/register','StudentController@create')->name("register");
Route::post('/register/student','StudentController@store')->name("studentRegister");

// Route::get('/register','ProfessorController@create');
Route::post('/register/operator','OperatorController@store');

Route::get('/home', 'HomeController@index')->name('home');
//---------------------------------------------

Route::post('/logout', 'StudentAuth\LoginController@logout')->name("logout");
Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name("login");
Route::post('/login', 'StudentAuth\LoginController@login')->name("login");