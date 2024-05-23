<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
        return view('livewire.guest.blogs')->layout('layouts.guest');
    }
}