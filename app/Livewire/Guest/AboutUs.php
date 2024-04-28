<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.guest.about-us')->layout('layouts.guest');
    }
}
