<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view("/","index");

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'store'])->middleware('guest');
Route::delete('/logout',[LoginController::class,'destroy'])->middleware('auth');

Route::get('/courses',[CourseController::class,'index']);

Route::delete('/courses/{course}',[CourseController::class,'destroy'])
       ->can('delete','course')
       ->name('courses.destroy');

Route::get('/courses/create',[CourseController::class,'create'])->middleware('auth');
Route::post('/courses',[CourseController::class,'store'])->middleware('auth');


Route::get('/courses/{course}/add/lecture',[LectureController::class,'create'])->name('lectures.add')
       ->can('delete','course');

Route::post('/courses/{course}/add/lecture',[LectureController::class,'store'])
       ->can('delete','course')
       ->name('lectures.store');

Route::get('/lectures/{lecture}',[LectureController::class,'index'])->name('lectures.show');

Route::get('/courses/{course}',[CourseController::class,'show'])->name('courses.show');



Route::get('/search',[SearchController::class,'index']);
Route::post('/search',[SearchController::class,'show']);