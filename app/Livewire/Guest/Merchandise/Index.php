<?php

namespace App\Livewire\Guest\Merchandise;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.guest.merchandise.index')->layout('layouts.guest');
    }
}
