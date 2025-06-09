<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);

        return view('courses.index',[
            'courses'=>$courses
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $courseAttributes = $request->validate( [
          'title'=> 'required',
          'description'=> 'required',
        ]);

        $courseAttributes['user_id']= \Auth::getUser()->id;

        $course = Course::create($courseAttributes);

        return redirect('/courses'.'/'. $course->slug);
    }

    public function show(Course $course)
    {
        return view('courses.show',[
            'course'=>$course
        ]);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('/courses');
    }
}
