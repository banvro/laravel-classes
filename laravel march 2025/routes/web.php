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
use App\Http\Controllers\ContactxController;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/home','home');
Route::view('/contact','contact');
Route::view('/myblog','myblog');
Route::view('/action','action');
Route::view('/search','search');

// use App\Http\Controllers\userinfo;

// Route::get('/us', [userinfo::class, 'user']);
// Route::get('/s', [userinfo::class, 'bye']);
// Route::get('/login', [userinfo::class, 'goto']);
// Route::get('/ll', [userinfo::class, 'ok']);
Route::post('/savingdata', [ContactxController::class, 'store']);

Route::get('/show', [ContactxController::class, 'show']);

Route::post("/delete-this/{x}", [ContactxController::class, 'destroy']);

Route::get("/edit/{id}", [ContactxController::class, 'edit']);

Route::post("/update-this/{x}", [ContactxController::class, 'update']);