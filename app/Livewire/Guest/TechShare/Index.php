<?php

namespace App\Livewire\Guest\TechShare;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.guest.TechShare.index')->layout('layouts.guest');
    }
}
