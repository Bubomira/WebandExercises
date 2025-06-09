<?php

namespace App\Http\Controllers;

use App\Models\Lecture;


class LectureController extends Controller
{
    public function __invoke(Lecture $lecture){
        return view("/lectures.show",[
           'lecture' =>$lecture
        ]);
    }
}
