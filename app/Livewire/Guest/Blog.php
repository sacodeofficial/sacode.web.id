<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.guest.blog')->layout('layouts.guest');
    }
}
