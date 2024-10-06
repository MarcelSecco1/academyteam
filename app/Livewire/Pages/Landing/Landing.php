<?php

namespace App\Livewire\Pages\Landing;

use Livewire\Component;


class Landing extends Component
{

    public $modal;

    public function render()
    {

        return view('livewire.pages.landing.landing')->layout('layout.app');
    }
}
