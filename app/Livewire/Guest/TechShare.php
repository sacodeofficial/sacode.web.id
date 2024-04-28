<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class TechShare extends Component
{
    public function render()
    {
        return view('livewire.guest.tech-share')->layout('layouts.guest');
    }
}
