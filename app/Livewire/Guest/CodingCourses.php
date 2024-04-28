<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class CodingCourses extends Component
{
    public function render()
    {
        return view('livewire.guest.coding-courses')->layout('layouts.guest');
    }
}
