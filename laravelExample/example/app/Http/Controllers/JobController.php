<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index(){
         //normal pagination
         //$jobs = Job::with('employer')->paginate(3);
     
         //simple-pagination
         //$jobs = Job::with('employer')->cursorPaginate(3);
     
         //simple-pagination
         $jobs = Job::with('employer')->latest()->simplePaginate(3);
     
         return view('jobs/index',[
             'jobs'=>$jobs
         ]);    
    }

    public function create(){
        return view('jobs/create');
    }

    public function store()
    {
        request()->validate([
        'title'=>['required','min:3'],
        'salary'=> ['required'],
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=>1
    ]);

    return redirect('/jobs');
    }
    
    public function show(Job $job){
         return view('jobs/show',['job'=>$job]);
    }

    public function edit(Job $job){
        return view('jobs/edit',['job'=>$job]);
    }
    public function update(Job $job){
        //authorize(on hold...)
    
        //validate 
        request()->validate([
            'title'=>['required','min:3'],
            'salary'=> ['required'],
        ]);
    
        //persist         
        $job->update([
            'title'=> request('title'),
            'salary'=> request('salary'),
        ]);
    
        return redirect('/jobs'.'/'.$job->id);
    }
    public function destroy(Job $job){ 
        //authorize (on hold)
        //if we pass the id in the route and want to use the collection
        //Job::findOrFail($id)->delete();
    
        $job->delete();
    
        return redirect('/jobs');
    }
}
