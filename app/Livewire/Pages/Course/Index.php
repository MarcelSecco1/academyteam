<?php

namespace App\Livewire\Pages\Course;

use App\Models\Course;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;

    private const PAGINATE = 5;

    #[Url('course')]
    public $search;

    public function render()
    {
        return view('livewire.pages.course.index', [
            'courses' => Course::with('minister')
                ->when($this->search, fn($query, $search) => $query->where('name', 'like', '%' . $search . '%'))
                ->orderBy('name')
                ->paginate(self::PAGINATE)
        ])
            ->layout('layout.app');
    }
}