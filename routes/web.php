<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view("/", "home");

// Route::view("/about", "about");
Route::get("/about", "App\Http\Controllers\NewcontactController@show");

Route::view("/contact", "contact");

Route::view("/services", "services"); 

Route::view("/blog", "blogs");


Route::post("/save-info", 'App\Http\Controllers\NewcontactController@store');

Route::get("/test", function(){
    return  view("test");
});