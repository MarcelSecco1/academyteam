<?php

namespace App\Livewire\Pages\Team;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.team.index')->layout('layout.app');
    }
}