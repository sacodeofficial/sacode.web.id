<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Roadmap extends Component
{
    public function render()
    {
        return view('livewire.guest.roadmap')->layout('layouts.guest');
    }
}
