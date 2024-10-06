<?php

namespace App\Livewire\Pages\Course;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Show extends Component
{
    public $course;
    // public $slide;
    public $lessonsQuantity = 0;
    public $lessonsTime = 0;


    function timeToSeconds($time)
    {
        list($hours, $minutes, $seconds) = explode(':', $time);
        return ($hours * 3600) + ($minutes * 60) + $seconds;
    }

    public function mount($course)
    {
        $this->course = Course::where('uuid', $course)
            ->with(['modules', 'minister'])
            ->firstOrFail();

        foreach ($this->course->modules as $module) {

            $module->lessons_count = $module->lessons->count();

            foreach ($module->lessons as $lesson) {
                $this->lessonsQuantity++;
                $this->lessonsTime += $this->timeToSeconds($lesson->duration);
            }
        }
    }

    public function render()
    {
        return view('livewire.pages.course.show')->layout('layout.app');
    }
}
