<?php

namespace App\Livewire\Guest\Playgrounds;

use App\Models\Playgrounds;
use Livewire\Component;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;

    
    public function render()
    {
        return view('livewire.guest.playgrounds.record', [
            'playgrounds' => Playgrounds::latest()->paginate(6)
        ])->layout('layouts.guest');
    }
}
