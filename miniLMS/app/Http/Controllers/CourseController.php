<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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
