<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    /**
     * Create a new policy instance.
     */
    public function delete(User $user, Course $course):bool
    {
        return $course->user()->is($user);
    }
}
