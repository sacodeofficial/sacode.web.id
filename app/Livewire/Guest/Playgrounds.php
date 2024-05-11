<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Playgrounds extends Component
{
    public function render()
    {
        return view('livewire.guest.playgrounds')->layout('layouts.guest');
    }
}
