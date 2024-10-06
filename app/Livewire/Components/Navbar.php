<?php

namespace App\Livewire\Components;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Str;


class Navbar extends Component
{

    public function render()
    {
        return view('livewire.components.navbar', [
            'courses' => Course::limit(5)->get()->sortBy('name')
        ]);
    }
}
