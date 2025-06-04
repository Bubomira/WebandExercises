<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',function(){
    return view('jobs',[
        'jobs'=>[
        [
            'id'=>1,
            'title'=>'Director',
            'salary'=>'$50.00'
        ],
         [
            'id'=>2,
            'title'=>'Programmer',
            'salary'=>'$150.00'
        ],
         [
            'id'=> 3,
            'title'=>'Teacher',
            'salary'=>'$40.00'
        ]
    ]
    ]);
});

Route::get('/jobs/{id}',function($id){
    $jobs=[
        [
            'id'=>1,
            'title'=>'Director',
            'salary'=>'$50.00'
        ],
         [
            'id'=>2,
            'title'=>'Programmer',
            'salary'=>'$150.00'
        ],
         [
            'id'=> 3,
            'title'=>'Teacher',
            'salary'=>'$40.00'
        ]
    ];

   $job= Arr::first($jobs,fn($job)=>$job['id']==$id);

    return view('job',['job'=>$job]);
});

Route::get('/contacts',function(){
    return view('contacts');
});

Route::get('/json',function(){
   return ["foo","bar"];  
});