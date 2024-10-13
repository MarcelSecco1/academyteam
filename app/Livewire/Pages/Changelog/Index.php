<?php

namespace App\Livewire\Pages\Changelog;

use App\Models\Changelog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $changelogs = Changelog::paginate(6);

        return view(
            'livewire.pages.changelog.index',
            [
                'changelogs' => $changelogs,
            ]
        )->layout('layout.app');
    }
}