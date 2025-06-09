<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    protected $guarded=[];

     public function user(){
        return $this->belongsTo(User::class);
    }
}
