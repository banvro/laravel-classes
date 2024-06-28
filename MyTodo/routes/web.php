<?php

use Illuminate\Support\Facades\Route;

Route::get('/xyz', function () {
    return view('welcome');
});



Route::view("/", "home");