<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::view("/x", "aboutus");

Route::get("/xyz", "App\Http\Controllers\User@showhomepage");

Route::get("/abc", "App\Http\Controllers\User@hloo");


Route::view("/news1", "my_templates.news1");

Route::view("/news2", "my_templates.news2");
