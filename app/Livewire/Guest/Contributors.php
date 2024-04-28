<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Contributors extends Component
{
    public function render()
    {
        return view('livewire.guest.contributors')->layout('layouts.guest');
    }
}
