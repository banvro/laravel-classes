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
