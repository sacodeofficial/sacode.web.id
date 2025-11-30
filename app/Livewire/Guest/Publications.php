<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Publications extends Component
{
    public function render()
    {
        return view('livewire.guest.publications')->layout('layouts.guest');
    }
}
