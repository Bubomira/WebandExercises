<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('/contacts','contacts');

Route::resource('jobs',JobController::class);

Route::get('/json',function(){
   return ["foo","bar"];  
});