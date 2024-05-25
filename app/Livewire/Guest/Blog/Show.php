<?php

namespace App\Livewire\Guest\Blog;

use Livewire\Component;

class Show extends Component
{
    
    public string $slug = '';

    public function render()
    {
        return view('livewire.guest.blog.show')->layout('layouts.guest');
    }
}