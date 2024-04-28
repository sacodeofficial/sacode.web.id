<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Merchandise extends Component
{
    public function render()
    {
        return view('livewire.guest.merchandise')->layout('layouts.guest');
    }
}
