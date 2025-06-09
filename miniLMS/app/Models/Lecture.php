<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    /** @use HasFactory<\Database\Factories\LectureFactory> */
    use HasFactory;

    protected $guarded=[];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
