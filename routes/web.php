<?php

use Illuminate\Support\Facades\Route;

Route::get('/xyz', function () {
    return view('welcome');
});



Route::get("/", "App\Http\Controllers\TodoController@show");

Route::post("/save-data", "App\Http\Controllers\TodoController@store");

Route::get("/delete-todo/{myid}", "App\Http\Controllers\TodoController@destroy");



Route::get("/show-todo-detail/{hey}", "App\Http\Controllers\TodoController@update");


Route::post("/update-data/{id}", "App\Http\Controllers\TodoController@edit");

// Route::view("/route1", "route1")->middleware("check"); 


 



// group middleware 

Route::middleware('check')->group(function(){
    Route::view("/route1", "route1");
    Route::view("/route2", "route2");
    Route::view("/route3", "route3");
});


Route::get("/set_session", "App\Http\Controllers\learnSession@set_session");

Route::get("/get_session", "App\Http\Controllers\learnSession@get_session");

Route::get("/check_session", "App\Http\Controllers\learnSession@check_session");

Route::get("/remove_session", "App\Http\Controllers\learnSession@remove_session");
