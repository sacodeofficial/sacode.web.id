<?php

namespace App\Livewire\Guest\Blog;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class Index extends Component
{
    
    public ?string $menu = '';

    #[On('show')]
    public function show($slug):void
    {
        $this->menu='show';
        $this->slug = $slug;
        $this->buttonMenu();
    }

    public function render()
    {
        return view('livewire.guest.blog.index')->layout('layouts.guest');
    }
}