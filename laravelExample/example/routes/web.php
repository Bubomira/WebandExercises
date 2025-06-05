<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;

use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('/contacts','contacts');

Route::resource('jobs',JobController::class);

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);

Route::get('/json',function(){
   return ["foo","bar"];  
});
