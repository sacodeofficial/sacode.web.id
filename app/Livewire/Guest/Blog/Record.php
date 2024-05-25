<?php

namespace App\Livewire\Guest\Blog;

use Livewire\Component;

class Record extends Component
{
    public function render()
    {
        return view('livewire.guest.blog.record')->layout('layouts.guest');
    }
}