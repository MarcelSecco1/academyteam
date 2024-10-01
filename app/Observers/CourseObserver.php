<?php

namespace App\Observers;

use Illuminate\Support\Str;


class CourseObserver
{
    public function creating($course)
    {
        $course->uuid = (string) Str::uuid();
    }
}