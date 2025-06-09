<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Course;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(Lecture $lecture){
        return view("/lectures.show",[
           'lecture' =>$lecture
        ]);
    }

    public function create(Course $course){
           return view('lectures.create',[
            'course'=>$course
           ]);
    }

    public function store(Request $request){
        
        $lectureAttributes = $request->validate( [
          'title'=> 'required',
          'description'=> 'required',
          'order'=>'required',
           'url'=>['required','url'],
        ]);

        $lectureAttributes['course_id'] = $request->get('course_id');

        $lecture = Lecture::create($lectureAttributes);

        return redirect('/lectures'.'/'. $lecture->id);
    }
}
