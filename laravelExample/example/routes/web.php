<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',function() {
    return view('jobs',[
        'jobs'=>Job::all()
    ]);
});

Route::get('/jobs/{id}',function($id) {

   $job= Job::find($id);

    return view('job',['job'=>$job]);
});

Route::get('/contacts',function(){
    return view('contacts');
});

Route::get('/json',function(){
   return ["foo","bar"];  
});