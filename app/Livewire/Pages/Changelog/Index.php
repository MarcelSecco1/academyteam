<?php

namespace App\Livewire\Pages\Changelog;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.changelog.index')->layout('layout.app');
    }
}