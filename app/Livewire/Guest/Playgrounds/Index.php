<?php

namespace App\Livewire\Guest\Playgrounds;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.guest.playgrounds.index')->layout('layouts.guest');
    }
}
