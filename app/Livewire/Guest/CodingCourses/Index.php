<?php

namespace App\Livewire\Guest\CodingCourses;

use Livewire\Component;

class Index extends Component
{
    public $CodingCourses = [];

    public function render()
    {
        return view('livewire.guest.CodingCourses.index')->layout('layouts.guest');
    }
}
