<?php

use App\Http\Controllers;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    echo "<h1>Well come to home page</h1>";
}); 
Route::get('/about',[ContactController::class,'about'])->middleware('check');
Route::get('/contact',[ContactController::class,'index']);
Route::get('/register',[ContactController::class,'register']);
Route::get('/dashboard',[ContactController::class,'dashboard'])->middleware('pass');


