<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Donation extends Component
{
    public function render()
    {
        return view('livewire.guest.donation')->layout('layouts.guest');
    }
}
