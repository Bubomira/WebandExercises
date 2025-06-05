<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',function() {

    //normal pagination
    //$jobs = Job::with('employer')->paginate(3);

    //simple-pagination
    //$jobs = Job::with('employer')->cursorPaginate(3);

    //simple-pagination
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs',[
        'jobs'=>$jobs
    ]);
});

Route::get('/jobs/{id}',function($id) {

   $job= Job::find($id);

   if(!$job) { abort(404);}

    return view('job',['job'=>$job]);
});

Route::get('/contacts',function(){
    return view('contacts');
});

Route::get('/json',function(){
   return ["foo","bar"];  
});