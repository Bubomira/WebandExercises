<?php

namespace App\Http\Controllers;

use App\Models\Tag;


class TagController extends Controller
{
     public function __invoke(Tag $tag){

        //jobs for tags
   
        return view('jobs.results',['jobs'=>$tag->jobs]);
    }
}
