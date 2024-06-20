<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view("/", "home");

Route::view("/about", "about");

Route::view("/contact", "contact");

Route::view("/services", "services");

Route::view("/blog", "blogs");


Route::post("/save-info", 'App\Http\Controllers\savedata@saveing_my_data');

Route::get("/test", function(){
    return  view("test");
});