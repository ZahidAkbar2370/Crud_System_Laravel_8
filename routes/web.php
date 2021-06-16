<?php

use Illuminate\Support\Facades\Route;

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


// Student Crud
Route::get("add-student","StudentController@create");
Route::post("save-student","StudentController@store");
Route::get("view-student","StudentController@index");
Route::get("delete-student/{id}","StudentController@destroy");
Route::get("edit-student/{id}","StudentController@edit");
Route::post("update-student/{id}","StudentController@update");