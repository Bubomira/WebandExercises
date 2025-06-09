<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function show(Request $request)
    {
        $query = $request->get('q');


       $courses = Course::where('title', 'like', "%{$query}%")
                ->orWhereHas('lectures', function ($q) use ($query) {
                    $q->where('title', 'like', "%{$query}%");
                })
                ->paginate(5);

         return view('courses.index',['courses'=>$courses]);
    }
}
