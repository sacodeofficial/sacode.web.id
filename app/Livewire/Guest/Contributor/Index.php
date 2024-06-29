<?php

namespace App\Livewire\Guest\Contributor;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.guest.Contributor.index')->layout('layouts.guest');
    }
}
